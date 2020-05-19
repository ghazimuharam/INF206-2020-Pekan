@extends('layout.main')

@section('title', 'Stock of Fish Items')

@section('content')

<div class="row my-3">
    <div class="col-sm-2">
        <div class="card rounded-circle">
            <div class="card-body">
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/5d5124973e2c44a89c91d7765d92e6d1?quality=95&fake=.png" heigth="100%" width="100%">
            </div>
        </div>
    </div>
    <div class="col-sm-5 mt-3">
        <label>Available Items</label>
        <div class="card mt-2" style="border-radius: 30px">
            <div class="card-body" >
                @foreach($ikan as $i)
                <p>
                    {{$i -> nama_barang}} <a href='/mitra/stock/{{$i -> id}}/delete'>(-)</a><br>
                </p>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <form action="/mitra/stock/fish" method="post">
        @csrf
            <div class="row mt-3">
                <div class="col-sm-10">
                    <label>Add New Items</label>
                    <div class="form-group mt-2">
                        <input class="form-control form-control-lg" type="text" placeholder="New Item" name="nama_barang" style="border-radius: 50px">
                    </div>
                </div>
                <div class="col-sm-2">
                    <label></label>
                    <button class="btn mt-1" type="submit">
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/c3af6b61bcb044539d680ba3f15c747a?quality=95&fake=.png" heigth="30" width="30">
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="text-center my-5">
    <a href="#" class="btn btn-dark btn-lg">Order List</a>
</div>

@endsection
