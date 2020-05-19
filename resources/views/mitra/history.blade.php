@extends('layout.main')

@section('title', 'History Order')

@section('content')

<h2>Order History</h2>

@foreach ($users as $user)
    <h4 class="mt-4">{{ $user->checkUser->created_at->diffForHumans() }}:</h4>
    <div class="row my-1">
        <div class="col-sm-5">
            <div class="card" style="border-radius: 30px">
            <div class="card-body">
                <h5>{{ $user->checkUser->name }}</h5>
                <h5>{{ $user->checkUser->phone }}</h5>
            </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
