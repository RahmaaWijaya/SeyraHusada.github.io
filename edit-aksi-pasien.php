<?php
include 'koneksi.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$gender=$_POST['JK'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];
$tlpn=$_POST['tlpn'];

mysqli_query($koneksi, "update pasien set Id_pasien='$id', Nama='$nama', Jenis_kelamin='$gender', Tanggal_lahir='$tgl', Alamat='$alamat', Nomor_telepon='$tlpn' where Id_pasien='$id'");
header("location: pasien.php");
?>