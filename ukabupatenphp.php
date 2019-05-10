<?php
include "koneksi.php";
$kode_prov=$_POST["kode_kabupaten"];
$nama_prov=$_POST["nama_kabupaten"];

$sql="UPDATE kabupaten set nama_kabupaten='$nama_kab' where kode_kabupaten='$kode_kab'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>