@extends('layout.main')

@section('title', 'Notifikasi')

@section('content')

<h3 class="text-center my-4">Pemesan Detail</h3>
<div class="col d-flex justify-content-center">
    <div class="card text-white bg-info mb-3" style="max-width: 30rem; border-radius: 30px">
        <div class="card-body" >
            <h5 class="card-title">No Pemesanan :</h5>
            <h6 class="text-center">1234567890</h6>
            <div class="row justify-content-center mt-3">
                <img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/bd7075a5ea4c4e7b948978de1bbee67f?quality=95&fake=.png" width="20%" height="20%" class="login-img">
            </div>
            <p class="text-center">Zubaidah</p>
            <p class="text-center">+62-821-3574-7838</p>
            <p class="text-center">Jl.Anggrek</p>
        </div>
    </div>
</div>

@endsection

