@extends('layout.main')

@section('title', 'History')

@section('content')

<h2>Order History</h2>
<h4 class="mt-4">Today :</h4>
<div class="row my-3">
    <div class="col-sm-5">
        <div class="card" style="border-radius: 30px">
        <div class="card-body">
            <h5>Pasar Makmur</h5>
            <h5>Daihatsu Grand Max Pick up</h5>
            <h5>BL 5432 CV</h5>
        </div>
        </div>
    </div>
</div>
<h4 class="mt-3">Yesterday :</h4>
<div class="row my-3">
    <div class="col-sm-5">
        <div class="card" style="border-radius: 30px">
        <div class="card-body">
            <h5>Pasar Minggu</h5>
            <h5>Isuzu Pickup</h5>
            <h5>BL 6550 AB</h5>
        </div>
        </div>
    </div>
</div>
<h4 class="mt-3">26 January 2020 :</h4>
<div class="row my-3">
    <div class="col-sm-5">
        <div class="card" style="border-radius: 30px">
        <div class="card-body">
            <h5>Pasar Sejahtera</h5>
            <h5>Mitsubishi T120ss</h5>
            <h5>BL 2234 AP</h5>
        </div>
        </div>
    </div>
</div>

@endsection
