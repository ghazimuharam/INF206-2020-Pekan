<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>PEKAN</title>
      <meta content="website" property="og:type">
      <script src="https://demo.web3canvas.com/cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script>
      <link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/landing/css/all.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/landing/css/circular-std.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}">
   </head>
   <body>
      <header>
         <div class="nav-menu">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"><img src="https://marvel-live.freetls.fastly.net/canvas/2020/3/485b9f77365546428c377c56ee5b3f0a?quality=95&fake=.png" alt="#" style="max-width: 60px;"> PEKAN</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('pembelilogin') }}" tabindex="-1" aria-disabled="true">Login Pembeli</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('mitralogin') }}" tabindex="-1" aria-disabled="true">Login Mitra</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="banner-img">
            <img src="{{ asset('assets/landing/images/banner-illustration.svg') }}" class="img-fluid" alt="#">
            <div class="main-title">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-lg-5">
                        <div class="hero-title">
                           <p>Hello from PEKAN</p>
                           <h2>PEKAN made your life easier!</h2>
                           <h5>Apakah Anda Siap untuk Kehidupan yang lebih mudah?
                              Ayo bergabung dengan PEKAN</h5>
                           <a href="#getStart" class="btn btn-danger">BERGABUNG SEKARANG</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="phpcontactform" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
               <div class="modal-content">
                  <div class="modal-body">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                     <form class="quote-form" action="https://demo.web3canvas.com/themeforest/fincorp/php/contact.php" method="post" id="phpcontactform">
                        <h5 class="text-center mt-3 mb-4">Get a Free Quote!</h5>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-sm-6"> <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name*" required> </div>
                              <div class="col-sm-6"> <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name*" required> </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone*" required>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" id="pac-input" name="address" placeholder="Address*" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100" id="js-contact-btn"><strong>
                        Get Free Quote
                        </strong> </button>
                        <div id="js-contact-result" data-success-msg="Success, We will get back to you soon" data-error-msg="Oops! Something went wrong"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="space bg-image">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="center-title">
                        <h2>Apa itu PEKAN ?</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-7 ml-auto">
                     <div class="insurance-title_wrap">
                        <h5>Hidup terasa lebih mudah dengan menggunakan PEKAN </h5>
                        <p class="insurance-para">Lelah dengan urusan kantor? <br>
                           Anak masih kecil-kecil? <br>
                           Hingga membuat anda tidak sempat ke pasar <br>
                           Kami tau solusinya <br>
                           Pekan adalah web yang dapat mempermudah hidup anda dalam memenuhi kebutuhan
                        </p>
                        <div class="insurance-type d-flex align-items-center">
                           <img src="{{ asset('assets/landing/images/tick.png') }}" alt="#">
                           <div class="insurance-type_title">
                              <h6>Belanja menjadi lebih mudah</h6>
                              <p>Tak perlu berpeluh-peluh untuk pergi berbelanja. Kamu hanya perlu memanggil pasar melalui
                                 handphone ataupun laptop anda dari rumah.</p>
                           </div>
                        </div>
                        <div class="insurance-type d-flex align-items-center">
                           <img src="{{ asset('assets/landing/images/tick.png') }}" alt="#">
                           <div class="insurance-type_title">
                              <h6>Say goodbye to menunda-nunda pekerjaan.</h6>
                              <p>Pekerjaan menumpuk dan bikin stress selalu jadi masalah yang sensitif, khususnya buat kaum ibu-ibu.
                                 Sekarang gak perlu takut lagi buat nunda kerjaan karena harus belanja ke pasar.
                              </p>
                           </div>
                        </div>
                        <div class="insurance-type d-flex align-items-center">
                           <img src="{{ asset('assets/landing/images/tick.png') }}" alt="#">
                           <div class="insurance-type_title">
                              <h6>Waktu untuk keluarga lebih banyak</h6>
                              <p>Hal yang paling penting adalah memiliki waktu untuk keluarga.
                                 Berlangganan di PEKAN kamu jadi bisa meluangkan waktu lebih banyak untuk keluarga.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner-img-2">
               <img src="{{ asset('assets/landing/images/health-family-illustration.svg') }}" width="978" class="img-fluid" alt="#">
            </div>
         </div>
      </header>
      <section class="space bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="center-title">
                     <h2>Kemudahan apa yang kamu dapat di PEKAN ?</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color1">
                        <img src="https://mpng.subpng.com/20180325/gww/kisspng-calculator-business-clip-art-calculator-5ab71ec1a89f38.8457428915219504016907.jpg" class="img-fluid" alt="#" style="max-width: 50px">
                     </div>
                     <h6>Kerugian</h6>
                     <p>Berjualan di PEKAN akan meringankan kerugian kamu. Jadi tidak perlu takut rugi.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color2">
                        <img src="{{ asset('assets/landing/images/car-insurance.svg') }}" class="img-fluid" alt="#">
                     </div>
                     <h6>Hemat</h6>
                     <p>Bejualan di PEKAN membuat anda hemat dalam membuka lapak. Kamu tidak perlu menyewa tempat untuk berjualan.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRt9YZyNv7l08iFvpT7R8DW_spw4_RE-3eAnzxmVc8kxc4lBtFX&usqp=CAU" class="img-fluid mt-3" alt="#">
                     </div>
                     <h6>Modal</h6>
                     <p>Berjualan di PEKAN tidak membutuhkan modal yang besar. Kamu tidak perlu mengeluarkan banyak uang untuk berjualan.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color4">
                        <img src="https://cdn0.iconfinder.com/data/icons/smiley-mom-2/512/mother-04-512.png" class="img-fluid" alt="#">
                     </div>
                     <h6>Mudah</h6>
                     <p>Untuk pertama kalinya kamu tidak perlu susah pergi ke pasar. Karena kamu hanya perlu memanggil pasar lewat handphone atau laptop kamu.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color5">
                        <img src="https://cdn.pixabay.com/photo/2014/04/03/00/38/clock-308937_960_720.png" class="img-fluid" alt="#">
                     </div>
                     <h6>Waktu</h6>
                     <p>Siapa yang tidak mau memiliki waktu luang yang cukup?. Dengan PEKAN waktu luang yang cukup bukan lagi impian semata.
                     </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color6">
                        <img src="https://cdn.cooltra.com/uploads/2018/04/Flota-de-motos.png" class="img-fluid" alt="#">
                     </div>
                     <h6>Transportasi</h6>
                     <p>Tidak memiliki kendaraan untuk pergi ke pasar?. Tidak perlu lagi cari ojek buat pergi ke pasar.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="space">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="center-title">
                     <h2>Kemudahan Pemakaian PEKAN</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-lg-4">
                  <div class="item-box howit-block">
                     <div class="item-icon color1">
                        <span>1</span>
                     </div>
                     <h6>Pesan</h6>
                     <p>Cukup order pasar yang kamu inginkan. Kamu hanya tinggal menunggu.
                     </p>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4">
                  <div class="item-box howit-block_af">
                     <div class="item-icon color2">
                        <span>2</span>
                     </div>
                     <h6>Datang</h6>
                     <p>Penjual cukup menerima pesanan dan langsung datang ke lokasi pembeli.
                     </p>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4">
                  <div class="item-box">
                     <div class="item-icon color3">
                        <span>3</span>
                     </div>
                     <h6>Transaksi</h6>
                     <p>Kamu bisa langsung bertransaksi ditempat yang kamu inginkan.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="pricing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="center-title">
                     <h2 id="getStart">Daftar</h2>
                  </div>
               </div>
            </div>
            <div class="row pricing-wrap justify-content-center mt-5">
               <div class="col-md-4">
                  <div class="row">
                     <div class="pricing-block">
                        <h6 class="primary">PEMBELI</h6>
                        <div class="pricing-high">
                           <div class="pricing-icon color3">
                              <h2><i class="fa fa-user"></i></h2>
                           </div>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Mudah untuk mengorder pasar. </p>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Pilih pasar yang kamu inginkan.</p>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Hemat waktu. </p>
                        </div>
                        <div class="add-btn pricing-btn_wrap">
                           <a href="{{ route('pembeliregis') }}" class="btn btn-success">JOIN</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-4">
                  <div class="row">
                     <div class="pricing-block color1">
                        <h6 class="primary">MITRA</h6>
                        <div class="pricing-high">
                           <div class="pricing-icon color3">
                              <h2><i class="fa fa-shopping-cart"></i></h2>
                           </div>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Mudah menerima orderan.</p>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Pilih lapak yang kamu inginkan. </p>
                        </div>
                        <div class="pricing-text">
                           <i class="fas fa-check"></i>
                           <p>Hemat modal. </p>
                        </div>
                        <div class="add-btn pricing-btn_wrap">
                           <a href="{{ route('mitraregis') }}" class="btn btn-success">JOIN</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="pricing-bg">
            <img src="{{ asset('assets/landing/images/bg-image4.png') }}" class="img-fluid" alt="#">
         </div>
      </section>
      <div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="responsive-bg">
                     <img src="{{ asset('assets/landing/images/family-illustration.svg') }}" width="569" class="img-fluid" alt="#">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
            <div class="row justify-content-center">
                <p>Copyright © 2020. Pekan</p>
            </div>
      </footer>
      <script data-cfasync="false" src="https://demo.web3canvas.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/landing/js/jquery-3.4.1.min.js') }}"></script>
      <script src="{{ asset('assets/landing/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/landing/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/landing/js/validate.js') }}"></script>
      <script src="{{ asset('assets/landing/js/contact.js') }}"></script>
   </body>
   <!-- Mirrored from demo.web3canvas.com/themeforest/fincorp/index-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 19:06:46 GMT -->
</html>
