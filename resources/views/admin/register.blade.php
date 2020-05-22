<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pekan | Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/split/split/images/favicon.png') }}"/>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url({{ asset('assets/images/sayur.jpg') }});">
					<span class="login100-form-title-1">
						Admin Register
					</span>
                </div>
                <div class="row mt-3 mx-5">
                    <div class="col-lg-6">
                        <form class="form" action="" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="name">Nama Lengkap</label>
                                <input id="name" class="form-control form-control-lg" type="text" name="name" style="border-radius: 50px" value="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="No_Hp">Nomor HP</label>
                                <input id="No_Hp" class="form-control form-control-lg" type="text" name="phone" style="border-radius: 50px" value="">
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input id="email" class="form-control form-control-lg" type="text" name="email" style="border-radius: 50px" value="">
                        </div>
                        <div class="form-group mt-2">
                            <label for="password">Password</label>
                            <input id="password" class="form-control form-control-lg" type="password" name="password" style="border-radius: 50px" value="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <button type="submit" class="btn login100-form-btn mb-5">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
