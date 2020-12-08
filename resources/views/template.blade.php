<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="assets/css/aos.css">
  <link href="assets/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="assets/css/style.css">




</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <!--<a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>  -->
          </div>
          <div class="col-lg-3 text-right">
        <!--    <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> -->
          </div>
        </div>
      </div>
    </div> 
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
      <div class="d-flex align-items-center">
          <!--<div class="site-logo">
            <a href="/index" class="d-block">
              <img src="assets/images/dpm144.png" alt="Image" class="img-fluid">
            </a>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
            <span class="icon-menu h3"></span></a>
          </div>-->
          <div class="site-logo">
            <a href="/index" class="d-block">
              <img src="assets/images/img1.png" alt="Image" class="img-fluid">
            </a>
            <!--<a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
            <span class="icon-menu h3"></span></a>-->
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="mr-auto navbar-nav">
            <nav class="site-navigation position-relative text-left" role="navigation">
             <!-- class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" style="padding-left: 0 ! important;">-->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a href="/index" class="nav-link text-left">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link text-left dropdown-toggledropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visi Misi</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/vm_poltekes">Visi Misi Poltekkes</a></li>
                    <li><a class="dropdown-item" href="/vm_dm">Visi Misi DPM</a></li>
                    
                  </ul>
                </li>
                
                <li><a href="/pemira_dpm" class="nav-link text-left">Pemira</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link text-left dropdown-toggledropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Struktur Anggota</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a href="/struktur_dpm" class="dropdown-item">Pimpinan Dewan dan Pengurus Harian</a>
                    </li>
                    <li class="dropdown">
                    <a href="/#">AKD</a>
                      <ul class="dropdown">
                          <li><a href="/struktur_dpm_komisi_I" class="dropdown-item">Komisi I</a></li>
                          <li><a href="/struktur_dpm_komisi_II" class="dropdown-item">Komisi II</a></li>
                          <li><a href="/struktur_dpm_komisi_III" class="dropdown-item">Komisi III</a></li>
                          <li><a href="/struktur_dpm_komisi_IV" class="dropdown-item">Komisi IV</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#" class="nav-link text-left">Anggota Dewan</a>
                      <ul class="dropdown">
                            <li><a href="/struktur_dpm_keperwatan" class="dropdown-item">Jurusan Keperawatan</a></li>
                            <li><a href="/struktur_dpm_kebidanan" class="dropdown-item">Jurusan Kebidanan</a></li>
                            <li><a href="/struktur_dpm_trr" class="dropdown-item">Jurusan TRR</a></li>
                            <li><a href="/struktur_dpm_rnik" class="dropdown-item">Jurusan RNIK</a></li>
                            <li><a href="/struktur_dpm_keperawatan_gigi" class="dropdown-item">Jurusan Keperawatan Gigi</a></li>
                            <li><a href="/struktur_dpm_analis_kesehatan" class="dropdown-item">Jurusan Analis Kesehatan</a></li>
                            <li><a href="/struktur_dpm_gizi" class="dropdown-item">Jurusan Gizi</a></li>
                            <li><a href="/struktur_dpm_kesehatan_lingkungan" class="dropdown-item">Jurusan Kesehatan Lingkungan</a></li>
                        </ul>
                    </li>
                    
                  </ul>
                </li>
                
                <li>
                  <a href="/kbm" class="nav-link text-left">KBM</a>
                </li>
                
                <li>
                    <a href="/produk_hukum" class="nav-link text-left">Produk Hukum</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-left dropdown-toggledropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aktifitas DPM</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="/aspirasi_dpm" class="dropdown-item">Aspirasi</a></li>
                    <li><a href="/aktivitas" class="dropdown-item">Aktifitas DPM</a></li>
                    <li><a href="/advonews_dpm" class="dropdown-item">AdvoNews</a></li>
                  </ul>
                </li>
              
              </ul> 
            </nav>

          </div>
          </div>
         
        </div>    
      </div> 
      </nav>
    </header>

    
    @yield('content')
    

    

    

   
          <!--<div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <!--<span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p> 
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
               <!--<span class="icon flaticon-library"></span>
             <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div> 
          </div>-->
        


    <!-- // 05 - Block 
-->@extends("foot")

    
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/js/bootstrap-dropdown.js"></script>



  <script src="assets/js/main.js"></script>

</body>

</html>