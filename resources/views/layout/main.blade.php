<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Pekan | @yield('title')</title>
    <style>
        body{
            background-color: #f8f9fa;
        }
        h1{
            color: rgb(63, 63, 63);
        }

        .login-img{
            border-radius: 50%;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">

                @if(Auth::check())
                    <div class="navbar-nav">
                        <a class="nav-item nav-link mr-3" href="{{ route('pembelihome') }}">Home</a>
                        <a class="nav-item nav-link mr-3" href="{{ route('pembelihistory') }}">History</a>
                        <a class="nav-item nav-link mr-3" href="{{ route('pembeliprofile') }}">Profile</a>
                        <a class="nav-item nav-link" href="{{ route('pembelilogout') }}">Logout</a>
                    </div>
                @elseif(Auth::guard('mitra')->check())
                    <div class="navbar-nav">
                        <a class="nav-item nav-link mr-3" href="{{ route('mitrahome') }}">Home</a>
                        <a class="nav-item nav-link mr-3" href="{{ route('notifikasi') }}">Notifikasi</a>
                        <a class="nav-item nav-link mr-3" href="{{ route('mitrahistory') }}">History</a>
                        <a class="nav-item nav-link mr-3" href="{{ route('mitraprofile') }}">Profile</a>
                        <a class="nav-item nav-link" href="{{ route('mitralogout') }}">Logout</a>
                    </div>
                @else
                    <div class="navbar-nav">
                        <a class="nav-item nav-link mr-3" href="/">Home</a>
                    </div>
                @endif
            </div>
        </nav>
        <div class="row justify-content-center">
            <img src="{{ url('keranjang.png') }}" width="15%" height="15%">
            <span>
                <div class="col-lg">
                    <div class="d-none d-lg-block">
                        <h2 class="mt-5">PEKAN</h2>
                    </div>
                    <div class="d-none d-block d-lg-none">
                        <h2>PEKAN</h2>
                    </div>
                </div>
            </span>
        </div>

        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
