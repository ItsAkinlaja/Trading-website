<?php

namespace App\Livewire\Admin\InvestmentPlan;

use App\Http\Integrations\GetOnlinetrader\GetOnlinetrader;
use App\Http\Integrations\GetOnlinetrader\Requests\AddProfitRequest;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Support\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AddProfit extends Component
{
    use LivewireAlert;
    public $amount;
    public $amount_type = 'Percent';
    public $useAmount = 'plan_increment_amount';
    public $addToBalance = 1;
    public $plan;
    public $userPlan;
    public $type = 'all';

    public function render()
    {
        return view('livewire.admin.investment-plan.add-profit');
    }

    #[Computed]
    public function plans(): Collection
    {
        return Plan::latest()->get();
    }

    #[Computed]
    public function usersPlans(): Collection
    {
        return UserPlan::with('user:id,name', 'plan:id,name')->where('status', 'active')->latest()->get();
    }

    public function save(): void
    {
        $this->authorize('manually add profit');
        $this->validate([
            'plan' => ['exclude_if:type,single', 'required', 'exists:plans,id'],
            'userPlan' => ['exclude_if:type,all', 'required', 'exists:user_plans,id'],
            'amount' => ['nullable', 'numeric'],
        ]);

        if ($this->type === 'all') {
            try {
                $usersPlans = UserPlan::with('user', 'plan')->where('plan_id', $this->plan)->where('status', 'active')->get();
                $usersPlans->each(function (UserPlan $userPlan) {
                    $this->creditProfit($userPlan);
                    $this->flash(message: 'Profit added successfully.', redirect: route('admin.usersPlans'));
                });
            } catch (\Exception $e) {
                $this->alert(type: 'error', message: $e->getMessage());
            }
        }

        if ($this->type === 'single') {
            try {
                $userPlan = UserPlan::with('user', 'plan')->find($this->userPlan);
                $this->creditProfit($userPlan);
                $this->flash(message: 'Profit added successfully.', redirect: route('admin.usersPlans'));
            } catch (\Exception $e) {
                $this->alert(type: 'error', message: $e->getMessage());
            }
        }
    }

    private function creditProfit(UserPlan $userPlan): void
    {
        $incrementValues = explode(',', $userPlan->plan->increment_amount);
        $increment_amount = $incrementValues[array_rand($incrementValues)];

        $getonlinetrader = new GetOnlinetrader();
        $request = new AddProfitRequest([
            'capital' => $userPlan->amount,
            'increment' => $increment_amount,
            'useAmount' => $this->useAmount,
            'amountType' => $this->amount_type,
            'amountValue' => floatval($this->amount),
        ]);

        $res = $getonlinetrader->send($request);
        $response = json_decode($res->body(), true);

        throw_if($res->failed(), $response['message']);

        // get amount
        $amount = $response['data']['amount'];

        // save profit to database
        $userPlan->rois()->create([
            'user_id' => $userPlan->user_id,
            'amount' => $amount,
        ]);

        $user = User::select('id', 'account_bal', 'roi')->find($userPlan->user_id);

        if ((bool) $this->addToBalance) {
            $user->increment('account_bal', $amount);
            $user->increment('roi', $amount);
        } else {
            $user->increment('roi', $amount);
        }
        $userPlan->increment('profit_earned', $amount);
    }
}
