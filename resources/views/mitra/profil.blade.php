@extends('layout.main')

@section('title', 'Profile')

@section('content')

<div class="row my-5">
    <img src="">
    <h3>{{$user->name}}</h3>
</div>
<div class="row">
    <div class="col-lg-5">
        <h4>Nama Lengkap</h4>
        <h5>{{$user->name}}</h5>
        <h4 class="mt-3">Nomor Hp</h4>
        <h5>{{$user->phone}}</h5>
        <h4 class="mt-3">Nama Pasar</h4>
        <h5>{{$user->market_name}}</h5>
    </div>
    <div class="col-lg-5">
        <h4>Email</h4>
        <h5>{{$user->email}}</h5>
        <h4 class="mt-3">Merk Kendaraan</h4>
        <h5>{{$user->vehicle_name}}</h5>
        <h4 class="mt-3">Nomor Plat</h4>
        <h5>{{$user->vrn}}</h5>
    </div>
</div>
@endsection
