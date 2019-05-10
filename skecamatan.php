<?php
include "koneksi.php";
$kode_prov=$_POST["kode_kecamatan"];
$nama_prov=$_POST["nama_kecamatan"];

$sql="insert into kecamatan values('$kode_kab','$nama_kec')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>