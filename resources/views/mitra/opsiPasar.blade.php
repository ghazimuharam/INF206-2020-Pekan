@extends('layout.main')

@section('title', 'Market Options')

@section('content')

<div class="row justify-content-center my-5">
    <h3 class="mt-3">Pilih Pasar</h3>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-sm-3 text-center my-1">
        <a class="btn btn-secondary btn-lg btn-block" href="/mitra/stock/fish"><img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/5d5124973e2c44a89c91d7765d92e6d1?quality=95&fake=.png" heigth="30" width="30"> Pasar Ikan</a>
    </div>
    <br>
    <div class="col-sm-3 text-center my-1">
        <a class="btn btn-secondary btn-lg btn-block" href="/mitra/stock/vegetable"><img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/352ca90e7b534cac8a146b1c10aadfa3?quality=95&fake=.png" heigth="30" width="30"> Pasar Sayur</a>
    </div>
</div>

@endsection
