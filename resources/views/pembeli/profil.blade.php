@extends('layout.main')

@section('title', 'Profile')

@section('content')

<div class="container-sm">
    <div class="row">
        <div class="col-lg-2 mt-2 col-sm-6 p-4">
            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/1360cd1bf9404099a5230588ab2bc332?quality=95&fake=.png" class="rounded-circle" style="max-width: 170px;">
        </div> 
        <div class="col-lg-4 mt-5">
            <h3>{{$user->name}}</h3>
        </div> 
    </div> 
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class ="col-sm-8 mt-2">
        <h4>Fullname</h4>
        <h5>{{$user->name}}</h5>
        <h4 class="mt-3">Mobile Number</h4>
        <h5>{{$user->phone}}</h5>
        <h4 class="mt-3">Email Address</h4>
        <h5>{{$user->email}}</h5>
    </div>
</div>
<div class="row justify-content-center mt-5">
    <div class="col-lg-7">
        <a href="{{ route('pembelieditprofile') }}" class="btn btn-outline-dark btn-md btn-block">Ubah Data Profil</a>
    </div>
</div>
<div class="row justify-content-center mt-3">
    <div class="col-lg-7">
        <a href="{{ route('pembeliubahpw') }}" class="btn btn-outline-dark btn-md btn-block">Ubah Password</a>
    </div>
</div>
@endsection
