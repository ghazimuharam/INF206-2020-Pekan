@extends('layout.main')

@section('title', 'Order')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h5>Hari ini :</h5>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group mt-2">
                        <label class="form-control form-control-lg" type="text" style="border-radius: 50px">
                            <img src="">
                            <label>Syahril</label>
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 mt-2">
                    <a class="btn btn-lg btn-secondary" style="border-radius: 50px" href="#">Terima Pesanan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
