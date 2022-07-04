<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Data Desa</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                          <a class="nav-link" href="<?php echo base_url("projekstlhlogin")?>">Home</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="<?php echo base_url("profildesa_stlhlogin")?> ">Profil Desa</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url("gambar")?>">Pemerintahan Desa</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url("user")?>">Data Desa</a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url("logout.php")?>">logout</a>
                        </li>
                  
                      </ul>
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
        <div class="container">
        <hr>
      
        <h2>Data User/Penduduk</h2>
  
        <table class="table table-dark">
            <thead bgcolor='#4d7cff'>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['email'] ?></td>
                      
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
              </table>
              <p>Anda dapat mengusulkan pendapat</p>
              <a href="<?php echo base_url('usulan/tambah'); ?>"><input type="button" value="Tambahkan Pengajuan Usulan"></a>
              <div clas>
  <hr style="margin-top: 200px;">
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
