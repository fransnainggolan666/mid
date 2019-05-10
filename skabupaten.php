<?php
include "koneksi.php";
$kode_prov=$_POST["kode_kabupaten"];
$nama_prov=$_POST["nama_kabupaten"];

$sql="insert into kabupaten values('$kode_kab','$nama_kab')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>