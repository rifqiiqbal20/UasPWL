<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Profil Desa</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php echo base_url("./assets/vendors/mdi/css/materialdesignicons.min.css")?>"
    />
    <link rel="stylesheet" href="<?php echo base_url("assets/vendors/aos/dist/aos.css/aos.css")?>" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.png")?>" />

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css")?>">
    
    <!-- endinject -->
  </head>

  <body>
  <script src="dist/sweetalert2.all.min.js"></script>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    <img src="HADER-5-GIF.gif" style="width: 1100px; height: 180px;">
               </ul>
                    
        
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="assets/images/JatiMakmur.png" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                      <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="<?php echo base_url("projek")?>">Home</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url("profildesa")?> ">Profil Desa</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" id="ya">Pemerintahan Desa</a>
                        </li>
                        <script>
                  btn =document.getElementById('ya');
                    btn.addEventListener('click', function(){
                        Swal.fire({
                          title:"Maaf Anda tidak bisa melihat Data",
                          text : 'Silahkan Login Dulu',
                          icon : 'error'
                    })
                  })
                  </script> 
                        <li class="nav-item">
                          <a class="nav-link" href="#" id="iya">Data Desa</a>
                          <script>
                  btn =document.getElementById('iya');
                    btn.addEventListener('click', function(){
                        Swal.fire({
                          title:"Maaf Anda tidak bisa melihat Data",
                          text : 'Silahkan Login Dulu',
                          icon : 'error'
                    })
                  })
                  </script> 
                        </li>
                        
                        <li class="nav-item">
                        </li>
                      <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Login</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="background : black">
                          <li><a href="<?php echo base_url("login")?>" class="nav-link dropdown-item">Penduduk </a></li>
                          <li><a href="<?php echo base_url("loginadmin")?>" class="nav-link dropdown-item">Admin</a></li>

                 
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                 
                  
                 
                  </ul>
                </ul>
         
          
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
   
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        Profil Desa
                      
          </div>
        </div>
        <ul class="navbar-top-left-menu">
                    <img src="balaidesa.jpg" style="width: 400px; height: 400px;">
               </ul>
               <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                          </p>
                          <p class="fs-15">
                          Desa Jatimakmur, kecamatan Songgom, Kabupaten Brebes, provinsi Jawa Tengah merupakan satu  dari 10 desa di kecamatan Songgom.yang mempunyai jarak 23 km dari kota kabupaten. Secara geografis Desa Jatimakmur sendiri terletak di perbatasan dengan:<br>

Sebelah Utara                                     : Desa Jatirokeh

Sebelah Timur                                    : Desa Kabupaten Tegal.

Sebelah Selatan                                  : Desa Songgom Lor

Cébela Barat                                       : Desa  Gegerkunci
                          </p>
                          <h2 class="font-weight-600 mb-2">Kondisi Desa</h2>
                          <p class="fs-15">
                          Letak topografis tanahnya datar, dengan lahan sebagian besar dimanfaatkan oleh masyarakat untuk lahan pertanian, perkebunan dan perikanan sehingga sebagian besar masyarakat desa adalah petani dan petani penggarap.
                          </p>
                          <h2 class="font-weight-600 mb-2">Sejarah Desa</h2>
                          <p class="fs-15">
                          Asal muasal Desa Jatimakmur adalah bagian atau pendduk yang termasuk wilayah Desa Jatirokeh,karena pada tahun 1996 ada program Pemerintah sehingga Desa Jatirokeh dimekar menjadi dua Desa yaitu,Desa Jatirokeh dan Desa Jatimakmur.Desa Jatirokeh terdiri dari penduduk Jatirokeh dan Dukuh Payung.Sedangkan Desa Jatimakmur terdiri dari Penduduk Kemakmuran,Penduduk Kalenpandan dan Penduduk Geblug.Nama Desa Jatimakmur di ambil dari nama Desa Jatirokeh dan Dukuh Kemakmuran yaitu JATI diambil dari nama Desa Jatirokeh dan MAKMUR di ambil dari nama Dukuh Kemakmuran.Pada Tahun 1994 Desa persiapan Jatimakmur mulai berjalan Pemerintahaan dengan susunan Kepala Pemerintahan sebagai berikut:<br>

I.    DARTO                                         Pjs  1994 – 1996<br>

II.   BASYIR AFANDI                       Pjs   1996 – 1998<br>

III. H.SOIDI                                      Kepala Desa I Periode 1998 – 2006<br>

IV.  H.SOIDI                                      Kepala Desa II Periode 2007 – 2013<br>

V.    ZAENAL ARIFIN                      Kepala Desa  III Periode   2013 – Sekarang

 
                          </p>
                        </div>
                      </div>
                      
                      <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="assets/images/JatiMakmur.png" class="footer-logo" alt="" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    PEMERINTAH DESA JATIMAKMUR
                    Jl.Jendral Sudirman No.3
                    Desa Jatimakmur
                    Kecamatan Songgom
                    Kabupaten Brebes
                    Provinsi Jawa Tengah 52266
                    Email : balaidesajatimakmur@yahoo.co.id
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-3">
                            
                    
                          </div>
                   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">Kategori</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">teks_berjalan</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Berita Desa</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Agenda Desa</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Peraturan Desa</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Transparasi Keuangan</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2022 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> JatiMakmur</a>.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Pembuat by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Rifqi Iqbal</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
