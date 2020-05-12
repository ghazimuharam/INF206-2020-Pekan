@extends('layout.main')

@section('title', 'Stock of Fish Items')

@section('content')


<div class="row"> 
    <div class="col-sm-2">
        <div class="card" style="border-radius: 50%">
            <div class="card-body" >
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/5d5124973e2c44a89c91d7765d92e6d1?quality=95&fake=.png" heigth="110" width="110">
            </div>
        </div>    
    </div>
    <div class="col-sm-5 mt-3"> 
        <label>Available Items</label>
        <div class="card mt-2" style="border-radius: 30px">
            <div class="card-body" >
                <p>
                    -Ikan Mujair <br>
                    -Kepiting <br>
                    -Udang <br>
                    -Ikan Gurami 
                </p>
            </div>
        </div>    
    </div>

    <div class="col-sm-5 "> 
        <form>
            <div class="row mt-3">
                <div class="col-sm-10">
                    <label>Add New Items</label>
                    <div class="form-group mt-2">
                        <input class="form-control form-control-lg" type="text" placeholder="New Item" style="border-radius: 50px">
                    </div>
                </div>
                <div class="col-sm-2">
                    <label>&nbsp;</label>
                    <button class="btn mt-1">
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/c3af6b61bcb044539d680ba3f15c747a?quality=95&fake=.png" heigth="150%" width="150%">
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="text-center mt-5">
    <a href="#" class="btn btn-dark btn-lg">Order List</a>
</div>
@endsection