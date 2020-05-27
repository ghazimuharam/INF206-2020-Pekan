@extends('layout.admin')

@section('title', 'Profile')

@section('content')

<div class="container-sm">
    <div class="row">
        <div class="col-lg-2 mt-2 col-sm-6 p-4">
            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/1360cd1bf9404099a5230588ab2bc332?quality=95&fake=.png" class="rounded-circle" style="max-width: 170px;">
        </div> 
        <div class="col-lg-4 mt-5 ml-5">
            <h3 class="mt-5">{{$user->name}}</h3>
        </div> 
    </div> 
</div>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-3 ml-5 sm-2">
        <h4>Email</h4>
        <h5>{{$user->email}}</h5>
        <h4 class="mt-3">No HP</h4>
        <h5>{{$user->phone}}</h5>
    </div>
</div>

@endsection