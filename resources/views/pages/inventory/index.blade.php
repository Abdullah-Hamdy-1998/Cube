@extends('layouts.default')
@section('title')
    Inventory
@endsection
@section('content')
    <style>

    </style>

    @forelse ($items as $item)
        <a href="{{ route('inventory.show', $item) }}">
            <div class="card  inventory-card-coust border-radius-coust  mr-4 col-3 d-inline-block"
                style="max-width:300px; min-width:300px;">
                <div class="card-body text-center ">
                    <div class="mb-4"> <img src="{{ asset('images/tomato.WEBP') }}" class="d-inline mr-5"
                            style="max-height:30px;">
                        <p class="d-inline "><b>{{ $item->name }}</b></p>
                    </div>
                    <div>
                        <p class="d-inline">Weight</p>
                        <p class="d-inline ml-5 "><b>{{ $item->weight ? $item->weight : '0.000' }}</b> Kg</p>
                    </div>
                    <div>
                        <p class="d-inline p-coust ">Quantity</p>
                        <p class="d-inline ml-5 p-coust"><b>{{ $item->quantity ? $item->quantity : '0' }}</b> U</p>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <h1>There is no items</h1>
    @endforelse
@endsection
