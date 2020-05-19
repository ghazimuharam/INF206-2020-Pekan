@extends('layout.main')

@section('title', 'Edit user - User');

@section('content')

<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
            <p class="h1 text-center mb-2"><i class="fa fas-car"></i> Edit Data Akun</p>
            <form action="{{ route('pembeliprofile') }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <p class="mb-1">Fullname</p>
                    <input type="text" class="form-control" name="name" required value="{{$user->name}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Mobile Number</p>
                    <input type="text" class="form-control" name="phone" required value="{{$user->phone}}">
                </div>

                <div class="form-group mb-2">
                    <p class="mb-1">Email</p>
                    <input type="text" class="form-control" name="email" required value="{{$user->email}}">
                </div>

                <div class="form-group mb-2">
                    <div class="col-lg-8">
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
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-success mb-3">Update Perubahan</button>
            </form>
		</div>
	</div>
</div>

@endsection
