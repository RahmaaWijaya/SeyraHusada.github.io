<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$spesial=$_POST['sp'];
$tlpn=$_POST['tlpn'];
$surel=$_POST['surel'];
mysqli_query($koneksi, "insert into dokter values('$id', '$nama', '$spesial', '$tlpn', '$surel')");
header("location:dokter.php");
?>