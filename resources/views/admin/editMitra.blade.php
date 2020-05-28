@extends('layout.admin')

@section('title','Change Mitra Data')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Data Mitra</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row my-1">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form action="/admin/changeMitra/{{ $users -> id }}" method="POST">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" value="{{ $users -> name }}">
                                            @if($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input type="text" name="phone" class="form-control" value="{{ $users -> phone }}">
                                            @if($errors->has('phone'))
                                                <div class="text-danger">
                                                    {{ $errors->first('phone')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pasar</label>
                                            <input type="text" name="market_name" class="form-control" value="{{ $users -> market_name }}">
                                            @if($errors->has('market_name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('market_name')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Merk Kendaraan</label>
                                            <input type="text" name="vehicle_name" class="form-control" value="{{ $users -> vehicle_name }}">
                                            @if($errors->has('vehicle_name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('vehicle_name')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>No Plat</label>
                                            <input type="text" name="vrn" class="form-control" value="{{ $users -> vrn }}">
                                            @if($errors->has('vrn'))
                                                <div class="text-danger">
                                                    {{ $errors->first('vrn')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="{{ $users -> email }}">
                                            @if($errors->has('email'))
                                                <div class="text-danger">
                                                    {{ $errors->first('email')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="text-center d-none d-md-inline"><br><br>
                                            <button type="submit" class="btn btn-primary col-xl-2">CHANGE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
