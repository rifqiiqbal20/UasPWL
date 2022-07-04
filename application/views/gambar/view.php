

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pemrintahan Desa</title>
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
                    <img src="<?php echo base_url("HADER-5-GIF.gif")?>" style="width: 1100px; height: 180px;">
               </ul>
                    
        
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="<?php echo base_url("assets/images/JatiMakmur.png")?>" alt=""
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
		  <li class="nav-item ">
                          <a class="nav-link" href="<?php echo base_url("projekstlhlogin")?>">Home</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="<?php echo base_url("profildesa_stlhlogin")?> ">Profil Desa</a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?php echo base_url("gambar")?>">Pemerintahan Desa</a>
                        </li>
                        <li class="nav-item">
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
     
        <h1>Data Berita Terkini</h1><hr>
        <div class="input-group">
                    <div class="form-outline">
                    <?php echo form_open('gambar/search')?>
                        <input type="search" name="keyword" id="form1" class="form-control" placeholder="Cari berita disini..."/>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari
                        <i class="fas fa-search"></i>
                    </button>
                    <?php echo form_close() ?>
                   <hr><hr><hr><hr><hr><hr><hr><hr><hr>
                    <a href="<?php echo base_url("lapUsulan.php"); ?>"><input type="button" value="Downloat Laporan Pengajuan"></a><hr>
                    </div>
                    <hr>


<table border="1" cellpadding="8" class="table table-dark" >
<tr bgcolor='#4d7cff'>
	<th width=5%>Gambar</th>
	<th width=10%>Judul</th>
	<th width=10%>kategori</th>
	<th width=10%>Autor</th>
	<th width=10%>Tanggal</th>
	<th width=10%>Deskripsi</th>
</tr>

<?php
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
	foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
		echo "<tr>";
		echo "<td><img src='".base_url("images/".$data->nama_file)."' width='100' height='100'></td>";
		echo "<td>".$data->judul."</td>";
		echo "<td>".$data->kategori."</td>";
		echo "<td>".$data->autor."</td>";
		echo "<td>".$data->tanggal."</td>";
		echo "<td>".$data->deskripsi."</td>";
		echo "</tr>";
	}
}else{ // Jika data tidak ada
	echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>
<a href="<?php echo base_url("index.php/gambar/tambah"); ?>"><input type="button" value="Tambah Berita"></a>
<div clas>
  <hr style="margin-top: 200px;">
</div>
    </div>        <!-- partial -->
   
                      
                      <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="<?php echo base_url("assets/images/JatiMakmur.png")?>" class="footer-logo" alt="" />
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

