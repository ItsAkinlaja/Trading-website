@props([
    'title' => __('Confirm Password'),
    'content' => __('For your security, please confirm your password to continue.'),
    'button' => __('Confirm'),
])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span {{ $attributes->wire('then') }} x-data x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);">
    {{ $slot }}
</span>

@once
    <x-dialog-modal wire:model.live="confirmingPassword">
        <x-slot name="title">
            {{ $title }}
        </x-slot>

        <x-slot name="content">
            {{ $content }}
            <div class="mt-2" x-data="{}"
                x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
                <x-form.input type="password" placeholder="{{ __('Password') }}" autocomplete="current-password"
                    x-ref="confirmable_password" wire:model="confirmablePassword" wire:keydown.enter="confirmPassword" />
                <x-input-error for="confirmable_password" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-ui.button dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
                {{ $button }}
            </x-ui.button>
        </x-slot>
    </x-dialog-modal>
@endonce
