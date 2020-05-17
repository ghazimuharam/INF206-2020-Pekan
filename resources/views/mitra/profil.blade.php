@extends('layout.main')

@section('title', 'Profile')

@section('content')

<div class="row">
    <div class="col-sm-2">
        <div class="card" style="border-radius: 50%">
            <div class="card-body" >
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/1360cd1bf9404099a5230588ab2bc332?quality=95&fake=.png" heigth="113" width="120">
            </div>
        </div>    
    </div>

    <div class ="col-sm-4 mt-4">
        <div class="my-5 col-lg-20">
            <h3>{{$user->name}}</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-3 sm-2 mt-4">
        <h4>Nama Lengkap</h4>
        <h5>{{$user->name}}</h5>
        <h4 class="mt-3">Nomor Hp</h4>
        <h5>{{$user->phone}}</h5>
        <h4 class="mt-3">Nama Pasar</h4>
        <h5>{{$user->market_name}}</h5>
    </div>

    <div class="col-lg-3 sm-4 mt-4">
        <h4>Email</h4>
        <h5>{{$user->email}}</h5>
        <h4 class="mt-3">Merk Kendaraan</h4>
        <h5>{{$user->vehicle_name}}</h5>
        <h4 class="mt-3">Nomor Plat</h4>
        <h5>{{$user->vrn}}</h5>
    </div>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href=""><i class="fas fa-user"></i> Edit Profil</a>
        <a class="dropdown-item" href=""><i class="fas fa-key"></i> Ubah password</a>
    </div>
</div>




@endsection