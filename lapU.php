<?php
 include "koneksi.php"
?>
<HTML>
<HEAD>
<TITLE>Menampilkan Data Usulan</TITLE>
</HEAD>
<BODY>
<?php
 $query = "SELECT * FROM usulan";
 $sql = mysqli_query ($conn,$query);
 echo "<h3>Data Usulan</h3>";
 echo "<table border='1' cellpadding='0'
cellspacing='0'>";
 echo "<tr bgcolor='yellow'><td
width=40%>ID</td>
 <td>ISI USULAN</td></tr>";
 while ($hasil = mysqli_fetch_array ($sql)) {
 $id = $hasil['id'];
 $textt = $hasil['textt'];
 //tampilkan Supplier
 echo "<tr bgcolor='cyan'> 
 <td align='center' width=10%>$id</td>
 <td align='left' width=40%>$textt</td>";
 }
 echo "</table>";
?>
</BODY>
</HTML> 