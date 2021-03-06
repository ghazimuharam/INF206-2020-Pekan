@extends('layout.main')

@section('title', 'Login Page')

@section('content')
<div class="row justify-content-center mt-3">
    <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/74fdd78bf4af4f4e99b1ff6286ee53c3?quality=95&fake=.png" width="20%" height="20%" class="login-img">
</div>

<div class="row justify-content-center mt-3">
    <form action="{{ route('mitralogin') }}" method="POST">
        @csrf
        <label>Login / <a href="{{ route('mitraregis') }}">Sign Up</a></label>
        @if(session('info'))
            <div class="text-danger">{{ session('info') }}</div>
        @endif
        @if(session('success'))
            <div class="text-success">{{ session('success') }}</div>
        @endif
        <div class="form-group mt-2">
            <input class="form-control form-control-lg" type="text" name="email" placeholder="Masukkan Email" style="border-radius: 50px" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password" style="border-radius: 50px">
        </div>
        <button type="submit" class="btn btn-dark btn-block my-4">LOGIN</button>
    </form>
</div>
@endsection
