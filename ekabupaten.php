<?php
include "koneksi.php";
$id=$_GET["id"];
$sql="select * from kabupaten where kode_kabupaten='$id'";
$query=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
 <head>
  <title>Edit kabupaten</title>
 </head>
 <body>
  <form method="post" action="ukabupaten.php">
	<table>
	<tr>
		<td>Kode kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kabupaten" value="<?php echo $data[0]; ?>"></td>
	</tr>
	<tr>
		<td>Nama kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kabupaten" value="<?php echo $data[1]; ?>"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Update"></td>
	</tr>
	</table>
  </form>
  <strong>Data kabupaten</strong>
  <table border="1">
  <tr>
	<td>Kode kabupaten</td>
	<td>Nama kabupaten</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td><a href=./ekabupaten.php?id=$data[0]>Edit</a>|<a href=./dkabupaten.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
  </body>
  </html>