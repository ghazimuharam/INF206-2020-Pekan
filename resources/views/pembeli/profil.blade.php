@extends('layout.main')

@section('title', 'Profile')

@section('content')

<div class="row">
    <div class="col-sm-2">
        <div class="card" style="border-radius: 50%">
            <div class="card-body" >
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/1360cd1bf9404099a5230588ab2bc332?quality=95&fake=.png" heigth="113" width="120">
            </div>
        </div>
    </div>

    <div class ="col-sm-4 mt-4">
        <div class="my-5 col-lg-20">
            <h3>Sitty Almatunira</h3>
        </div>
        <h4>Full Name</h4>
        <h5>Sitty Almatunira</h5>
        <h4 class="mt-3">Mobile Number</h4>
        <h5>082276675327</h5>
        <h4 class="mt-3">Email Address</h4>
        <h5>almatunira@mhs.unsyiah.co.id</h5>
    </div>
</div>

@endsection
