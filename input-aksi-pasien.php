<?php
include 'koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['JK'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];
$tlpn=$_POST['tlpn'];

mysqli_query($koneksi, "insert into pasien values('$id','$nama','$gender','$tgl','$alamat','$tlpn')");
header("location: pasien.php");
?>