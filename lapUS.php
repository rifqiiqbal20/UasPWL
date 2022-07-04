<?php
 include "koneksi.php"
?>
<HTML>
<HEAD>
<TITLE>Menampilkan Data User</TITLE>
</HEAD>
<BODY>
<?php
 $query = "SELECT * FROM user";
 $sql = mysqli_query ($conn,$query);
 echo "<h3>Data Pengguna</h3>";
 echo "<table border='1' cellpadding='0'
cellspacing='0'>";
 echo "<tr bgcolor='yellow'><td
width=40%>ID</td>
 <td>USERNAME</td>
 <td>EMAIL</td>
<td>PASSWORD MD5</td></tr>";
 while ($hasil = mysqli_fetch_array ($sql)) {
 $id = $hasil['id'];
 $username = $hasil['username'];
 $email = $hasil['email'];
 $password = $hasil['password'];
 //tampilkan Supplier
 echo "<tr bgcolor='cyan'> 
 <td align='center' width=10%>$id</td>
 <td align='left' width=40%>$username</td>
 <td align='center' width=10%>$email</td>
 <td align='center' width=10%>$password</td>";
 }
 echo "</table>";
?>
</BODY>
</HTML> 