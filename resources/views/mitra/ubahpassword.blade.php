@extends('layout.main')

@section('title', 'Ubah Password');

@section('content')
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-5">
			<p class="h1 text-center mb-4"><i class="fa fas-car"></i> Ubah Password</p>
				@if(session('error'))
					<div class="alert alert-danger text-center" >
						{{session('error')}}
					</div>
				@endif
			  <form action="{route('mitralogin')}}" method="POST">
				<div class="form-group mb-2">
					<p class="mb-1">Password saat ini</p>
					<input type="password" class="form-control" name="password_sekarang" required>
				</div>
				<div class="form-group mb-2">
					<p class="mb-1">Password baru</p>
					<input type="password" class="form-control" name="password_baru" required>
				</div>
				<div class="form-group mb-3">
					<p class="mb-1">Konfirmasi Password baru</p>
					<input type="password" class="form-control" name="konfirmasi_password_baru" required>
				</div>

		      	<button type="submit" class="btn btn-primary">Ubah Password</button>
		      	 <a href="" class="btn btn-danger">Batal</a>
			</form>
		</div>
	</div>
</div>
@endsection