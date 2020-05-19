@extends('layout.main')

@section('title', 'Market Order')

@section('content')

<div class="row justify-content-center my-4">
    <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/59cde7560b144546886779ef781e443a?quality=95&fake=.png" alt="ikan" width="8%" height="8%">
</div>

<div class="row justify-content-center my-2">
    <div class="col-sm-2 text-center">
        <div class="row justify-content-center mt-2">
            <div class="card" style="border-radius: 30px">
                <div class="btn btn-light btn-lg" style="border-radius: 30px">
                    <div class="card-body" >
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                        <br> <a href="{{ route('pembeliorderdetails', ['name' => 'sayur', 'id' => $users[0]->id]) }}" style="color:black; text-decoration:none;">{{ $users[0]->market_name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-2 mx-3 text-center">
        <div class="row justify-content-center mt-2">
            <div class="card" style="border-radius: 30px">
                <div class="btn btn-light btn-lg" style="border-radius: 30px">
                    <div class="card-body" >
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                        <br> <a href="{{ route('pembeliorderdetails', ['name' => 'sayur', 'id' => $users[1]->id]) }}" style="color:black; text-decoration:none;">{{ $users[1]->market_name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-sm-2 text-center">
        <div class="row justify-content-center">
            <div class="card" style="border-radius: 30px">
                <div class="btn btn-light btn-lg" style="border-radius: 30px">
                    <div class="card-body" >
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                        <br> <a href="{{ route('pembeliorderdetails', ['name' => 'sayur', 'id' => $users[2]->id]) }}" style="color:black; text-decoration:none;">{{ $users[2]->market_name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-2 mx-3 text-center">
        <div class="row justify-content-center">
            <div class="card" style="border-radius: 30px">
                <div class="btn btn-light btn-lg" style="border-radius: 30px">
                    <div class="card-body" >
                        <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                        <br> <a href="{{ route('pembeliorderdetails', ['name' => 'sayur', 'id' => $users[3]->id]) }}" style="color:black; text-decoration:none;">{{ $users[3]->market_name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
