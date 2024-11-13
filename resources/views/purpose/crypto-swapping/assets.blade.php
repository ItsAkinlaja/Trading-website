@use('\Illuminate\Support\Number', 'Number')
@use('\Illuminate\Support\Str', 'Str')
<div>
    <div class="page-title">
        <div class=" d-flex justify-content-between align-items-center">
            <div class="">
                <p class="mb-0 text-white h3 font-weight-400">Swap Crypto</p>
            </div>
            <div class="">
                <a href="{{ route('user.swap.transactions') }}" class="btn btn-light btn-sm"
                    @if ($settings->spa_mode) wire:navigate @endif>Swap
                    History</a>
            </div>
        </div>
    </div>
    <x-danger-alert />
    <x-success-alert />
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6" wire:ignore>
                            <h6 class="font-weight-bold">Estimated Balance</h6>
                            <h2 class="font-weight-bold">
                                {{ Number::currency($estimated_balance, 'USD') }}
                            </h2>
                        </div>
                        <div class="col-6">
                            <h6 class="font-weight-bold">Account Balance</h6>
                            <h2 class="font-weight-bold">
                                {{ Number::currency(Auth::user()->account_bal, $settings->s_currency) }}
                            </h2>
                        </div>
                    </div>
                    <hr>
                    <div class="mt-4 row">
                        <div class="col-lg-12">
                            <div class="mb-3 row">
                                <div class="col-lg-4">
                                    <x-form.input placeholder="Search Coin" wire:model.live='search' type="search"
                                        name="search" class="bg-light" />
                                </div>
                            </div>
                            <div class="table-responsive d-lg-block d-none">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Coin</th>
                                            <th scope="col">Balance</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assets as $asset)
                                            <tr>
                                                <td class="">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <img src="{{ $asset['asset']->logo_url }}"
                                                                width="{{ $asset['asset']->logo_size }}"
                                                                class="rounded-full">
                                                        </div>
                                                        &nbsp;
                                                        <div>
                                                            <p class="m-0"> {{ $asset['asset']->name }}</p>
                                                            <p class="m-0 text-muted">{{ $asset['asset']->symbol }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">
                                                        @if ($asset['balance'] == 0.0)
                                                            0
                                                        @else
                                                            {{ $asset['balance'] }}
                                                        @endif
                                                        {{ $asset['asset']->symbol }}
                                                    </p>
                                                    <span class="text-muted">
                                                        {{ Number::currency($asset['balance'] * floatval($asset['asset']->price_in_usd), 'USD') }}
                                                    </span>
                                                </td>
                                                <td>
                                                    @if ($settings->use_api_price_for_swap && $asset['asset']->is_default)
                                                        <a href="{{ route('user.swap.viewcoin', ['coin' => $asset['asset']]) }}"
                                                            class="btn btn-link"
                                                            @if ($settings->spa_mode) wire:navigate @endif>View</a>
                                                    @endif
                                                    <a href="{{ route('user.swap.convert', ['coin' => $asset['asset']]) }}"
                                                        class="btn btn-link"
                                                        @if ($settings->spa_mode) wire:navigate @endif>Convert</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-block d-lg-none row">
                                @foreach ($assets as $asset)
                                    <div class="mb-3 col-12">
                                        <div
                                            class="p-2 px-3 border rounded-lg shadow-sm d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img src="{{ $asset['asset']->logo_url }}"
                                                        width="{{ $asset['asset']->logo_size }}" class="rounded-full">
                                                </div>
                                                &nbsp;
                                                <div>
                                                    <p class="m-0"> {{ $asset['asset']->name }}</p>
                                                    <p class="m-0 text-muted">{{ $asset['asset']->symbol }}</p>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="m-0">
                                                            @if ($asset['balance'] == 0.0)
                                                                0
                                                            @else
                                                                {{ $asset['balance'] }}
                                                            @endif
                                                            {{ $asset['asset']->symbol }}
                                                        </p>
                                                        <span class="text-muted">
                                                            {{ Number::currency($asset['balance'] * floatval($asset['asset']->price_in_usd), 'USD') }}
                                                        </span>
                                                    </div>
                                                    &nbsp; &nbsp;
                                                    <div class="dropdown">
                                                        <a href="#" id="dropdownMenuLink" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            @if ($settings->use_api_price_for_swap && $asset['asset']->is_default)
                                                                <a href="{{ route('user.swap.viewcoin', ['coin' => $asset['asset']]) }}"
                                                                    class="btn btn-link"
                                                                    @if ($settings->spa_mode) wire:navigate @endif>View</a>
                                                            @endif
                                                            <a href="{{ route('user.swap.convert', ['coin' => $asset['asset']]) }}"
                                                                class="btn btn-link"
                                                                @if ($settings->spa_mode) wire:navigate @endif>Convert</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>