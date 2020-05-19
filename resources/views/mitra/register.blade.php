@extends('layout.main')

@section('title', 'Register')

@section('content')

<div class="d-none d-block d-lg-none">
    <div class="row justify-content-center mt-3">
        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/74fdd78bf4af4f4e99b1ff6286ee53c3?quality=95&fake=.png" width="20%" height="20%" class="login-img">
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-2">
        <div class="d-none d-lg-block">
            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/74fdd78bf4af4f4e99b1ff6286ee53c3?quality=95&fake=.png" width="75%" height="75%" class="login-img">
        </div>
    </div>
    <div class="col-lg-3">
        <label><a href="{{ route('mitralogin') }}">Login</a> / Sign Up</label>
        <form action="{{ route('mitraregis') }}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" name="name" placeholder="Nama Lengkap" style="border-radius: 50px" value="{{ old('name') }}">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" name="phone" placeholder="Nomor HP" style="border-radius: 50px" value="{{ old('phone') }}">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" name="market_name" placeholder="Nama Pasar" style="border-radius: 50px" value="{{ old('market_name') }}">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" name="vehicle_name" placeholder="Merk Kendaraan" style="border-radius: 50px" value="{{ old('vehicle_name') }}">
            </div>
    </div>
    <div class="col-lg-3">
        <label>&nbsp;</label>
        <div class="form-group mt-2">
            <input class="form-control form-control-lg" type="text" name="vrn" placeholder="No Plat" style="border-radius: 50px" value="{{ old('vrn') }}">
        </div>
        <div class="form-group mt-2">
            <input class="form-control form-control-lg" type="text" name="email" placeholder="Email" style="border-radius: 50px" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" style="border-radius: 50px">
        </div>
    </div>
    <div class="col-lg-4">
    @if ($errors->any())
        <div class="row">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if(session('info'))
        <div class="row">
            <div class="text-danger">{{ session('info') }}</div>
        </div>
    @endif
    </div>
</div>
<div class="row justify-content-center">
        <button type="submit" class="btn btn-dark my-4">SUBMIT</button>
    </form>
</div>

@endsection
