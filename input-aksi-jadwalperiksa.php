<?php
include 'koneksi.php';
$id=$_POST['id'];
$pasien=$_POST['pasien'];
$dokter=$_POST['dokter'];
$nmdokter=$_POST['nmdokter'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];
$keluhan=$_POST['keluhan'];
mysqli_query($koneksi, "insert into jadwalperiksa values('$id', '$pasien', '$dokter', '$nmdokter', '$tgl', '$jam', '$keluhan')");
header("location: jadwalperiksa.php");
?>