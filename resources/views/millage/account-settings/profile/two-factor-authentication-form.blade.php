<div>
    <h4 class="mb-0 font-weight-bold">{{ __('Two Factor Authentication') }}</h4>
    <p class="text-muted"> {{ __('Add additional security to your account using two factor authentication.') }}</p>

    <div class="max-w-xl mt-3 text-sm text-center text-gray-600">
        @if ($this->enabled)
            <h6 class="text-dark">
                @if ($showingConfirmation)
                    {{ __('Finish enabling two factor authentication.') }}
                @endif
            </h6>
        @else
            <h5 class="font-weight-bold">
                {{ __('You have not enabled two factor authentication.') }}
            </h5>
            <small class="text-muted">
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </small>
        @endif
    </div>
    @if ($this->enabled)
        @if ($showingQrCode)
            <div class="max-w-xl mt-4 text-sm text-center text-gray-600">
                <p class="font-semibold">
                    @if ($showingConfirmation)
                        {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}
                    @else
                        {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}
                    @endif
                </p>
            </div>

            <div class="inline-block p-2 mt-4 text-center bg-white">
                {!! $this->user->twoFactorQrCodeSvg() !!}
            </div>

            <div class="form-group">
                <p class="font-weight-bold">
                    {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
                </p>
            </div>

            @if ($showingConfirmation)
                <div class="form-group">
                    <x-form.label for="code" label="{{ __('Code') }}" />
                    <x-form.input id="code" name="code" inputmode="numeric" autofocus
                        autocomplete="one-time-code" wire:model="code"
                        wire:keydown.enter="confirmTwoFactorAuthentication" />
                </div>
            @endif
        @endif
        @if ($showingRecoveryCodes)
            <div class="max-w-xl mt-4 text-sm text-gray-600">
                <p class="font-semibold">
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                </p>
            </div>

            <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm text-center bg-gray-100 rounded-lg">
                @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                    <div>{{ $code }}</div>
                @endforeach
            </div>
        @endif
    @endif
    <div class="mt-1 form-group">
        @if (!$this->enabled)
            <x-confirms-password wire:then="enableTwoFactorAuthentication">
                <x-ui.button class="btn-sm" type="button" wire:loading.attr="disabled">
                    {{ __('Enable') }}
                </x-ui.button>
            </x-confirms-password>
        @else
            @if ($showingRecoveryCodes)
                <x-confirms-password wire:then="regenerateRecoveryCodes">
                    <x-secondary-button class="me-3">
                        {{ __('Regenerate Recovery Codes') }}
                    </x-secondary-button>
                </x-confirms-password>
            @elseif ($showingConfirmation)
                <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                    <x-ui.button type="button" class="me-3" wire:loading.attr="disabled">
                        {{ __('Confirm') }}
                    </x-ui.button>
                </x-confirms-password>
            @else
                <x-confirms-password wire:then="showRecoveryCodes">
                    <x-secondary-button class="me-3">
                        {{ __('Show Recovery Codes') }}
                    </x-secondary-button>
                </x-confirms-password>
            @endif

            @if ($showingConfirmation)
                <x-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-secondary-button wire:loading.attr="disabled">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                </x-confirms-password>
            @else
                <x-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-danger-button wire:loading.attr="disabled">
                        {{ __('Disable') }}
                    </x-danger-button>
                </x-confirms-password>
            @endif
        @endif
    </div>
</div>
