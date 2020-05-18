@extends('layout.main')

@section('title', 'Market Options')

@section('content')
<div class="row justify-content-center my-5">
    <h3 class="mt-3">Pilih Pasar</h3>
</div>
<div class="row justify-content-center mt-2">
    <div class="col-sm-3 text-center">
        <a class="btn btn-secondary btn-lg" href="/buyer/marketOrder">Pasar Ikan</a>
    </div>
    <div class="col-sm-3 text-center">
        <a class="btn btn-secondary btn-lg" href="{{ route('pembeliorders') }}">Pasar Sayur</a>
    </div>
</div>
@endsection
