<?php

namespace App\Livewire\Admin\Settings\Others;

use App\Models\Settings;
use App\Services\Website;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class SocialLogin extends Component
{
    use LivewireAlert;

    public $google_secret;
    public $google_id;
    public $google_redirect;
    public $set;

    public function mount(): void
    {
        $settings = Cache::get('site_settings');
        $this->google_redirect = Website::url(includeConnection: true) . '/auth/google/callback';
        $this->fill($settings);
        $this->set = $settings;
    }

    public function save(): void
    {
        $array = $this->all();
        $filtered = Arr::except($array, ['set']);
        $this->set->update($filtered);
        Cache::forget('site_settings');
        activity()->log('Social Login Settings Updated');
        $this->alert(message: 'Settings Saved Successfully.');
    }

    public function render()
    {
        return view('livewire.admin.settings.others.social-login');
    }
}