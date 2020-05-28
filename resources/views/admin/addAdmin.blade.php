@extends('layout.admin')

@section('title','Add Admin')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New User</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row my-1">
                        <!-- Area Chart -->
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form action="{{route('addadmin')}}" method="post">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Name Lengkap</label>
                                            <input type="text" name="name" class="form-control">
                                            @if($errors->has('name'))
                                                <div class="text-danger">
                                                    {{ $errors->first('name')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input type="text" name="phone" class="form-control">
                                            @if($errors->has('phone'))
                                                <div class="text-danger">
                                                    {{ $errors->first('phone')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control">
                                            @if($errors->has('email'))
                                                <div class="text-danger">
                                                    {{ $errors->first('email')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control">
                                            @if($errors->has('password'))
                                                <div class="text-danger">
                                                    {{ $errors->first('password')}}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="text-center d-none d-md-inline"><br><br>
                                            <button type="submit" class="btn btn-primary col-xl-2">Generate</button>
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
