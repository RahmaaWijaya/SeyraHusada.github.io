<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$spesialis=$_POST['sp'];
$tlpn=$_POST['tlpn'];
$surel=$_POST['Surel'];

mysqli_query($koneksi, "update dokter set Id_dokter='$id', Nama='$nama', Spesialisasi='$spesialis', Nomor_tlpn='$tlpn', Surel='$surel' where Id_dokter='$id'");
header("location: dokter.php");
?>