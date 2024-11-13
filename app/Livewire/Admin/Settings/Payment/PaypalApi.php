<?php

namespace App\Livewire\Admin\Settings\Payment;

use App\Models\Settings;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class PaypalApi extends Component
{
    use LivewireAlert;

    public $pp_ci;
    public $pp_cs;
    public $set;

    public function mount(): void
    {
        $settings = Cache::get('site_settings');
        $this->fill($settings);
        $this->set = $settings;
    }

    public function save(): void
    {
        $array = $this->all();
        $filtered = Arr::except($array, ['set']);
        $this->set->update($filtered);
        Cache::forget('site_settings');
        activity()->log('Paypal Api Settings Updated');
        $this->alert(message: 'Settings Saved Successfully.');
    }

    public function render()
    {
        return view('livewire.admin.settings.payment.paypal-api');
    }
}