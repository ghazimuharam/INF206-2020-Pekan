@extends('layout.main')

@section('title', 'Detail')

@section('content')

<h3 class="text-center mt-4"  >Order Detail</h3>
<div class="col d-flex justify-content-center mb-4">
    <div class="card" style="max-width: 30rem; border-radius: 30px">
        <div class="card-body" >
            <h5 class="card-title">No Pesanan :</h5>
            <h6 class="text-center">{{ $order[0]->id }}</h6>
            <div class="row justify-content-center mt-3">
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/53b2123b49e14feda2744a6f1128f992?quality=95&fake=.png" width="20%" height="20%" class="login-img">
            </div>
            <div class="row justify-content-center mt-3">
                <p class="text-center mb-2">{{ $mitra->name}}</p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center mb-2">{{ $mitra->phone}}</p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center mb-2">{{ $mitra->market_name}}</p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center mb-2">{{ $mitra->vehicle_name}}</p>
            </div>
            <div class="row justify-content-center">
                <p class="text-center">{{ $mitra->vrn}}</p>
            </div>
    </div>
</div>

@endsection

