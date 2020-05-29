@extends('layout.main')

@section('title', 'History')

@section('content')

<h2 class="mt-5">Order History</h2>
@foreach ($users as $user)
    <h4 class="mt-4">{{ $user->checkSeller->created_at->diffForHumans() }}</h4>
    <div class="row my-2">
        <div class="col-sm-5">
            <div class="card" style="border-radius: 30px">
            <div class="card-body">
                <h5>{{ $user->checkSeller->market_name }}</h5>
                <h5>{{ $user->checkSeller->vehicle_name }}</h5>
                <h5>{{ $user->checkSeller->vrn }}</h5>
            </div>
            </div>
        </div>
    </div>
@endforeach
    <div class="mb-4"></div>
@endsection
