@extends('layout.main')

@section('title', 'Register')

@section('content')
<div class="row mt-3">
    <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/74fdd78bf4af4f4e99b1ff6286ee53c3?quality=95&fake=.png" width="10%" height="10%" class="login-img">
    <div class="col-sm-5">
        <label>Sign Up</label>
        <form>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" placeholder="Nama Lengkap" style="border-radius: 50px">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" placeholder="Nomor HP" style="border-radius: 50px">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" placeholder="Nama Pasar" style="border-radius: 50px">
            </div>
            <div class="form-group mt-2">
                <input class="form-control form-control-lg" type="text" placeholder="Merk Kendaraan" style="border-radius: 50px">
            </div>
    </div>
    <div class="col-sm-5">
        <label>&nbsp;</label>
        <div class="form-group mt-2">
            <input class="form-control form-control-lg" type="text" placeholder="No Plat" style="border-radius: 50px">
        </div>
        <div class="form-group mt-2">
            <input class="form-control form-control-lg" type="text" placeholder="Email" style="border-radius: 50px">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" placeholder="Password" style="border-radius: 50px">
        </div>
    </div>
</div>
<div class="row justify-content-center">
        <button type="submit" class="btn btn-dark my-4">SUBMIT</button>
    </form>
</div>
@endsection
