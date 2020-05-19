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
            <form action="{{ route('pembeliubahpw') }}" method="POST">
                @csrf
				<div class="form-group mb-2">
					<p class="mb-1">Password saat ini</p>
					<input type="password" class="form-control" name="passwordnow" required>
				</div>
				<div class="form-group mb-2">
					<p class="mb-1">Password baru</p>
					<input type="password" class="form-control" name="password" required>
				</div>
				<div class="form-group mb-3">
					<p class="mb-1">Konfirmasi Password baru</p>
					<input type="password" class="form-control" name="password_confirmation" required>
				</div>

                <div class="form-group mb-2">
                    <div class="col-lg-12">
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
                                <div class="text-info">{{ session('info') }}</div>
                            </div>
                        @elseif(session('failed'))
                            <div class="row">
                                <div class="text-danger">{{ session('failed') }}</div>
                            </div>
                        @endif
                    </div>
                </div>

                  <button type="submit" class="btn btn-success">Ubah Password</button>
                  <a href="{{ route('pembeliprofile') }}" class="btn btn-danger">Kembali</a>
			</form>
		</div>
	</div>
</div>
@endsection
