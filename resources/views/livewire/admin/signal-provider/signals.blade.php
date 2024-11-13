<x-slot:title>
    Trade Signals
</x-slot:title>
<div x-data="{ newSignal: @entangle('newSignal'), addResult: @entangle('addResult') }">
    <x-breadcrumbs title=" Trade Signals">
        <li class="nav-item">
            <a href="#"> Trade Signals</a>
        </li>
    </x-breadcrumbs>
    <x-admin.alert />
    <div class="row">
        <div class="mb-2 text-right col-12" x-show="!newSignal && !addResult">
            <button type="button" class="btn btn-primary" @click="newSignal = true">
                Add Signal
            </button>
        </div>
        <div class="col-12" x-show="newSignal" style="display: none">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="py-3 col-lg-8 offset-lg-2">
                            <h5 class=" font-weight-bold">Add a New Signal</h5>
                            <form wire:submit='addSignal'>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label>Order type</label>
                                        <x-form.select name='tradeDirection' wire:model='tradeDirection'
                                            :options="[
                                                'Sell' => 'Sell',
                                                'Buy' => 'Buy',
                                                'Buy-Stop' => 'Buy-Stop',
                                                'Sell-Stop' => 'Sell-Stop',
                                                'Sell-Limit' => 'Sell-Limit',
                                                'Buy-Limit' => 'Buy-Limit',
                                            ]" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Currency Pair</label>
                                        <x-form.input wire:model="tradePair" placeholder="eg EUR/USD" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Price</label>
                                        <x-form.input wire:model="price" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Take Profit 1</label>
                                        <x-form.input wire:model="takeProfit1" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Take Profit 2</label>
                                        <x-form.input wire:model="takeProfit2" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Stop Loss</label>
                                        <x-form.input wire:model="stopLoss" required />
                                    </div>
                                    <div class="text-right col-12">
                                        <x-ui.button class="btn-info" type="button" @click="newSignal = false">
                                            Cancel
                                        </x-ui.button>
                                        <x-ui.button>
                                            <x-spinner wire:loading wire:target="addSignal" />
                                            Add Signal
                                        </x-ui.button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" x-show="!newSignal">
            <div class="card">
                <div class="card-body">
                    @isset($signals)
                        <div x-show="!addResult">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Ref</th>
                                        <th>Order Type</th>
                                        <th>Currency</th>
                                        <th>Price</th>
                                        <th>Take Profit-1</th>
                                        <th>Take Profit-2</th>
                                        <th>Stop Loss</th>
                                        <th>Result</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @forelse ($signals as $signal)
                                            <tr>
                                                <td>#{{ $signal['reference'] }}</td>
                                                <td> {{ $signal['trade_direction'] }}</td>
                                                <td>{{ $signal['currency_pair'] }}</td>
                                                <td>{{ $signal['price'] }}</td>
                                                <td>{{ $signal['take_profit1'] }}</td>
                                                <td>{{ $signal['take_profit2'] ? $signal['take_profit2'] : '-' }}</td>
                                                <td>{{ $signal['stop_loss1'] }}</td>
                                                <td>{{ $signal['result'] ? $signal['result'] : '-' }}</td>
                                                <td>
                                                    <span @class([
                                                        'badge',
                                                        'badge-success' => $signal['status'] === 'published',
                                                        'badge-danger' => $signal['status'] === 'unpublished',
                                                    ])>
                                                        {{ $signal['status'] }}
                                                    </span>
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($signal['created_at'])->inUserTimezone()->format('d M Y') }}
                                                </td>
                                                <td>
                                                    @if ($signal['status'] == 'unpublished')
                                                        <x-ui.button type='button' class="btn-sm"
                                                            wire:click="publishSignal({{ $signal['id'] }})"
                                                            wire:loading.attr='disabled'
                                                            wire:confirm="Are you sure you want to publish this signal?">
                                                            <x-spinner wire:loading
                                                                wire:target="publishSignal('{{ $signal['id'] }}')" />
                                                            Publish
                                                        </x-ui.button>
                                                    @else
                                                        <a href="#" class="m-1 btn btn-secondary btn-sm"
                                                            wire:click="setResult('{{ $signal['id'] }}')">
                                                            <x-spinner wire:loading
                                                                wire:target="setResult('{{ $signal['id'] }}')" />
                                                            Result
                                                        </a>
                                                    @endif

                                                    <button type='button' wire:click="deleteSignal('{{ $signal['id'] }}')"
                                                        wire:confirm='Are you sure you want to delete this trade signal?'
                                                        class="m-1 btn btn-danger btn-sm" wire:loading.attr='disabled'>
                                                        <x-spinner wire:loading
                                                            wire:target="deleteSignal('{{ $signal['id'] }}')" />
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="11" class="text-center">
                                                    <x-no-data />
                                                    No Data Available
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            @include('components.pagination', ['route' => 'admin.signal.signals'])
                        </div>
                        <div class="row" x-show="addResult">
                            <div class="col-lg-8 offset-lg-2">
                                <form wire:submit.prevent='updateResult'>
                                    <div class="form-group">
                                        <label>Enter Result</label>
                                        <input type="text" wire:model.defer='signalResult' class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <x-spinner wire:loading wire:target='updateResult' />
                                            Publish Result
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" @click="addResult = false">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
