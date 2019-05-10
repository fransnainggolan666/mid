<!doctype html>
<html lang="en">
 <head>
  <title>Data Kecamatan</title>
 </head>
 <body>
  <form method="post" action="skecamatan.php">
	<table>
	<tr>
		<td>Kode kecamatan</td>
		<td>:</td>
		<td><select name="kode_kecamatan">
			<?php
			include "koneksi.php";
			$sql="select * from kecamatan";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select></td>
	</tr>
	<tr>
		<td>Kode kecamatan</td>
		<td>:</td>
		<td><input type="text" name="kode_kec"></td>
	</tr>
	<tr>
		<td>Nama kecamatan</td>
		<td>:</td>
		<td><input type="text" name="nama_kec"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data kecamatan</strong>
  <table border="1">
  <tr>
	<td>Kode kabupaten</td>
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
