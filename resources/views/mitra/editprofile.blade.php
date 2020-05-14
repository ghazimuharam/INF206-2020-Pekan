@extends('layout.main')

@section('title', 'Edit user - Mitra');

@section('content')
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
			<p class="h1 text-center mb-2"><i class="fa fas-car"></i> Edit Data Akun</p>
            <form action="{{ route('mitraprofile') }}" method="POST">	
                @csrf
                <div class="form-group mb-2">
                    <p class="mb-1">Nama Lengkap</p>
                    <input type="text" class="form-control" name="name" required value="{{$user->name}}">
                </div>
                
                <div class="form-group mb-2">
                    <p class="mb-1">Nomor HP </p>
                    <input type="text" class="form-control" name="phone" required value="{{$user->phone}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Nama Pasar</p>
                    <input type="text" class="form-control" name="market_name" required value="{{$user->market_name}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Email</p>
                    <input type="text" class="form-control" name="email" required value="{{$user->email}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Merek Kendaraan</p>
                    <input type="number	" class="form-control" name="vehicle_name" required value="{{$user->vehicle_name}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Nomor Plat</p>
                    <input type="text" class="form-control" name="vrn" required value="{{$user->vrn}}">
                </div>
                <button type="submit" class="btn btn-success">Update Perubahan</button>
            </form>
		</div>
	</div>
</div>
@endsection