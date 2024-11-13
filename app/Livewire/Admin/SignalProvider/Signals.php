<?php

namespace App\Livewire\Admin\SignalProvider;

use App\Exceptions\SignalErrorException;
use App\Models\Settings;
use App\Notifications\SignalPublished;
use App\Services\SignalService;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Signals extends Component
{
    use LivewireAlert;

    public $signals;
    public $tradeDirection = 'Sell';
    public $tradePair = '';
    public $price = '';
    public $stopLoss = '';
    public $takeProfit1 = '';
    public $takeProfit2 = '';
    public $buyStop = '';
    public $sellStop = '';
    public $buyLimit = '';
    public $sellLimit = '';
    public $signalId;
    public $signalResult = '';
    public $page;
    public $nextPageUrl;
    public $previousPageUrl;
    public $newSignal = false;
    public $addResult = false;

    public function mount(string $page): void
    {
        $settings = Settings::select('modules')->find(1);
        abort_if($settings->modules['signal'] !== 'true', 404);

        $this->page = $page;
    }

    public function render(SignalService $signal)
    {
        try {
            $data = $signal->signals($this->page);
            $this->signals = $data['data'];
            $this->nextPageUrl = $data['next_page_url'];
            $this->previousPageUrl = $data['prev_page_url'];
        } catch (SignalErrorException $e) {
            session()->flash('message', $e->getMessage());
        }

        return view('livewire.admin.signal-provider.signals');
    }

    public function setResult(string $id): void
    {
        $this->signalId = $id;
        $this->newSignal = false;
        $this->addResult = true;
    }

    public function addSignal(SignalService $signal): void
    {
        $this->authorize('manage signals');
        try {
            $signal->add([
                'direction' => $this->tradeDirection,
                'pair' => $this->tradePair,
                'price' => $this->price,
                'tp1' => $this->takeProfit1,
                'tp2' => $this->takeProfit2,
                'sl1' => $this->stopLoss,
                'buy_stop' => $this->buyStop,
                'sell_stop' => $this->sellStop,
                'buy_limit' => $this->buyLimit,
                'sell_limit' => $this->sellLimit,
            ]);
            $this->reset([
                'tradeDirection',
                'tradePair',
                'price',
                'takeProfit1',
                'takeProfit2',
                'stopLoss',
                'buyStop',
                'sellStop',
                'buyLimit',
                'sellLimit',
            ]);
            $this->alert(message: 'Signal Added Successfully');
        } catch (SignalErrorException $e) {
            $this->alert(type: 'error', message: $e->getMessage());
        }
    }

    public function deleteSignal(SignalService $signal, string $id): void
    {
        $this->authorize('manage signals');
        try {
            $signal->delete($id);
            $this->alert(message: 'Signal Deleted Successfully');
        } catch (SignalErrorException $e) {
            $this->alert(type: 'error', message: $e->getMessage());
        }
    }

    public function publishSignal(SignalService $signal, string $id): void
    {
        $this->authorize('manage signals');
        try {
            $response = $signal->publish($id);
            Notification::send([$response['chat_id']], new SignalPublished($response['chat_id'], $response['message']));
            $this->alert(message: 'Signal Published Successfully');
        } catch (SignalErrorException $e) {
            $this->alert(type: 'error', message: $e->getMessage());
        }
    }

    public function updateResult(SignalService $signal): void
    {
        $this->authorize('manage signals');

        try {
            $response = $signal->updateResult([
                'signalId' => $this->signalId,
                'result' => $this->signalResult,
            ]);

            Notification::send([$response['chat_id']], new SignalPublished($response['chat_id'], $response['message']));
            $this->flash(message: 'Signal Result Published Successfully', redirect: route('admin.signal.signals', ['page' => 1]));
        } catch (SignalErrorException $e) {
            $this->alert(type: 'error', message: $e->getMessage());
        }
    }
}