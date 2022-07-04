<?php
 session_start();
 // Fungsi header dengan mengirimkan raw data excel
 header ( "Content-type: application/vnd-ms-excel" ) ;

 // Mendefinisikan nama file ekspor "hasil-export.xls"
 header ( "Content-Disposition: attachment;filename=export_user.xls" ) ;

 // Tambahkan table
 include 'lapUS.php' ;
?> 
