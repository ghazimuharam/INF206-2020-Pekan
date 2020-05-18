@extends('layout.main')

@section('title', 'Market')

@section('content')

    <div class="row justify-content-center ">
        <img src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/truck-256.png" class="rounded mx-auto d-block" alt="...">
    </div>
    <div class="row justify-content-center my-1">
        <h3 class="mt-1">{{ $mitra->market_name }}</h3>
    </div>
    <div class="row justify-content-center mt-1">
        <div class="h-100 d-inline-block ">
            <form action="{{ route('pembeliorderdetails', ['name' => 'sayur', 'id' => $mitra->id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-lg btn-dark btn-block my-3" >ORDER</button>
            </form>
        </div>
    </div>
@endsection
