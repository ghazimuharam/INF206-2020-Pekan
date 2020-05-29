@extends('layout.main')

@section('title', 'Market Order')

@section('content')

<div class="row justify-content-center my-4">
    <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/5622ea6e4182426ab33f86c301fa7581?quality=95&fake=.png" alt="ikan" width="8%" height="8%">
</div>

<div class="row justify-content-center mt-1 mx-3">
    <div class="col-sm-2 text-center">
        <div class="row justify-content-center mt-2">
            <a href="{{ route('pembeliorderdetails', ['name' => 'ikan', 'id' => $users[0]->id]) }}" style="text-decoration: none;">
                <div class="card" style="border-radius: 30px">
                    <div class="btn btn-light btn-lg" style="border-radius: 30px">
                        <div class="card-body">
                            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                            <br>{{ $users[0]->market_name }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="mx-2"></div>
    <div class="col-sm-2 text-center">
        <div class="row justify-content-center mt-2">
            <a href="{{ route('pembeliorderdetails', ['name' => 'ikan', 'id' => $users[1]->id]) }}" style="text-decoration: none;">
                <div class="card" style="border-radius: 30px">
                    <div class="btn btn-light btn-lg" style="border-radius: 30px">
                        <div class="card-body">
                            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                            <br>{{ $users[1]->market_name }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="row justify-content-center my-2 mx-3">
    <div class="col-sm-2 text-center">
        <div class="row justify-content-center mt-2">
            <a href="{{ route('pembeliorderdetails', ['name' => 'ikan', 'id' => $users[2]->id]) }}" style="text-decoration: none;">
                <div class="card" style="border-radius: 30px">
                    <div class="btn btn-light btn-lg" style="border-radius: 30px">
                        <div class="card-body">
                            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                            <br>{{ $users[2]->market_name }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="mx-2"></div>
    <div class="col-sm-2 text-center mb-5">
        <div class="row justify-content-center mt-2">
            <a href="{{ route('pembeliorderdetails', ['name' => 'ikan', 'id' => $users[3]->id]) }}" style="text-decoration: none;">
                <div class="card" style="border-radius: 30px">
                    <div class="btn btn-light btn-lg" style="border-radius: 30px">
                        <div class="card-body">
                            <img src="https://marvel-live.freetls.fastly.net/canvas/2020/2/baef645c521242c8be067fcdf83edbd4?quality=95&fake=.png" alt="ikan" width="60%" height="80%">
                            <br>{{ $users[3]->market_name }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection
