<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TUgas UAS PWL</title>
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
  <script>
                              let timerInterval
                              Swal.fire({
                              title: 'Loading!',
                              timer: 1000,
                              timerProgressBar: true,
                              didOpen: () => {
                              Swal.showLoading()
                              const b = Swal.getHtmlContainer().querySelector('b')
                              timerInterval = setInterval(() => {
                              b.textContent = Swal.getTimerLeft()
                              }, 100)
                              },
                              willClose: () => {
                              clearInterval(timerInterval)
                              }
                              }).then((result) => {
                              /* Read more about handling dismissals below */
                              if (result.dismiss === Swal.DismissReason.timer) {
                              console.log('')
                              }
                              })
                              </script>
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
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url("projek")?>">Home</a>
                        </li>
                        <li class="nav-item ">
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
   
                <marquee><font color="red" size="+3" face="tekton pro">Selamat Datang diwebsite Desa JatiMakmur!!!</font></marquee>
     
        <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                  <img
                    src="assets/images/dashboard/home.jpg"
                    alt="banner"
                    style="height: 420px;"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      Terbaru
                    </div>
          
                    <h1 class="mb-2">
                      UPACARA HUT RI KEMERDEKAAN KE 73 DESA JATIMAKMUR
                    </h1>
                    <div class="fs-12">
               
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Berita Terbaru</h2>

                    <div
                      class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5>MUSYAWARAH DESA (MUSDES) PENYUSUNAN RKPDes 2019</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/musyawarah.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5>PENGAMBILAN SUMPAH DAN PELANTIKAN SEKDES DESA JATIMAKMUR</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/pelantikan.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5>PENINGKATAN JALAN DUKUH KALENPANDAN RW.05 VOLUME 187 M</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/peningkatanjalan.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Kategori</h2>
                    <ul class="vertical-menu">
                      <li><a href="#">teks_berjalan</a></li>
                      <li><a href="#">Berita Desa</a></li>
                      <li><a href="#">Agenda Desa</a></li>
                      <li><a href="#">Peraturan Desa</a></li>
                      <li><a href="#">Transparasi Keuangan</a></li>
              
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/pertemuan.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Terbaru</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          PERTEMUAN REFRESING KADER TINGGAT KECAMATAN
                        </h2>
                   
                        <p class="mb-0">
                          Desa Jatimakmur  pada hari sabtu tanggal 21 oktober 2017 di balai Desa Jatimakmur telah diadakan Pertemuan Refresing Kader Tingkat Kecamatan, Dengan Jumlah 130 peserta berkumpul menjadi satu di Desa Jatimakmur, Adapun dari Puskesmas menyampaikan Tentang […]
                        </p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/pagarkeliling.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Terbaru</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          PEMBANGUNAN PAGAR KELILING BELAKANG KANTOR DESA JATIMAKMUR
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          Desa Jatimakmur Telah Membangun  Pagar Keliling di belakang Kantor Desa Alhamdulilah Telah Terrealisasi dari Sumber dana Alokasi Dana Desa Tahun Anggaran 2017  yang dulunya sangat memperhatikan sekarang sudah rapi dan bersih. Adapun untuk tanah urug […]
                        </p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="assets/images/dashboard/pengerukankali.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                              >Terbaru</span
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h2 class="mb-2 font-weight-600">
                          NORMALISASI / PENGERUKAN KALI
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                        <p class="mb-0">
                          UPTD Pengairan Kabupaten Brebes Melakukan  Normalisasi  atau Pengerukan kali dan Penyayapan sepanjang dari Desa Songgom Sampai Kab. Brebes Melewati Desa Jatimakmur
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
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
