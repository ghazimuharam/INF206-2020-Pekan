@extends('layout.main')

@section('title', 'Stock of Vegetables Items')

@section('content')

<div class="row">
    <div class="col-sm-2">
        <div class="card" style="border-radius: 50%">
            <div class="card-body" >
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/352ca90e7b534cac8a146b1c10aadfa3?quality=95&fake=.png" heigth="110" width="110">
            </div>
        </div>
    </div>
    <div class="col-sm-5 mt-3">
        <label>Available Items</label>
        <div class="card mt-2" style="border-radius: 30px">
            <div class="card-body" >
                @foreach($sayur as $s)
                <p>
                    {{$s -> nama_barang}} <a href='/mitra/stock/{{$s -> id}}/delete'> (-)</a><br>
                </p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm-5 ">
        <form action="/mitra/stock/vegetable" method="post">
        @csrf
            <div class="row mt-3">
                <div class="col-sm-10">
                    <label>Add New Items</label>
                    <div class="form-group mt-2">
                        <input class="form-control form-control-lg" type="text" placeholder="New Item" name="nama_barang" style="border-radius: 50px">
                    </div>
                </div>
                <div class="col-sm-2">
                    <label>&nbsp;</label>
                    <button class="btn mt-1" type="submit">
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/c3af6b61bcb044539d680ba3f15c747a?quality=95&fake=.png" heigth="150%" width="150%">
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
