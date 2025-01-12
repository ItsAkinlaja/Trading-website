<?php

namespace App\Observers;

use App\Models\CryptoAccount;
use App\Models\User;
use App\Models\Settings;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $settings = Settings::select('enable_email_verification')->find(1);

        if (!$settings->enable_email_verification) {
            $user->email_verified_at = now();
            $user->save();
        }

        if ($user->isNotAdmin()) {
            $cryptoaccnt = new CryptoAccount();
            $cryptoaccnt->user_id = $user->id;
            $cryptoaccnt->save();
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
