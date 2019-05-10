<?php
include "koneksi.php";
$kode_prov=$_POST["kode_kecamatan"];
$nama_prov=$_POST["nama_kecamatan"];

$sql="UPDATE kecamatan set nama_kecamatan='$nama_kec' where kode_kecamatan='$kode_kec'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>