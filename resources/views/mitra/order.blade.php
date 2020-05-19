@extends('layout.main')

@section('title', 'Order')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="" method="POST">
                @csrf
                @foreach ($orders as $order)
                    <h5>{{ $order->created_at->diffForHumans() }} :</h5>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group mt-2">
                                <label class="form-control form-control-lg" type="text" style="border-radius: 50px">
                                    <img src="">
                                    <label>{{ $order->checkUser->name }}</label>
                                    <input type="hidden" name="OrderId" value="{{ $order->id }}">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-2">
                            <button class="btn btn-lg btn-secondary" style="border-radius: 50px" type="submit">Terima Pesanan</button>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection
