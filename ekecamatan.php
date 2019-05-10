<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kecamatan where kode_kecamatan='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit kecamatan</title>
 </head>
 <body>
  <form method="post" action="ukecamatan.php">
	<table>
	<tr>
		<td>Kode kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kecamatan" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Nama kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kecamatan" value="<?php echo $data[1]; ?>"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Update"></td>
	</tr>
	</table>
  </form>
  <strong>Data kecamatan</strong>
  <table border="1">
  <tr>
	<td>Kode kecamatan</td>
	<td>Nama kecamatan</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kecamatan";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td><a href=./ekecamatan.php?id=$data[0]>Edit</a>|<a href=./dkecamatan.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>