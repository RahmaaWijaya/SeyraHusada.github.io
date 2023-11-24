<?php
include 'koneksi.php';
$id=$_POST['id'];
$pasien=$_POST['pasien'];
$dokter=$_POST['dokter'];
$nmdokter=$_POST['nmdokter'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];
$keluhan=$_POST['keluhan'];
mysqli_query($koneksi, "update jadwalperiksa set Id_JP='$id', Id_pasien='$pasien', Id_dokter='$dokter', Nama_dokter='$nmdokter', Tanggal='$tgl', Jam='$jam', Keluhan='$keluhan' where Id_JP='$id'");
header("location: jadwalperiksa.php");
?>