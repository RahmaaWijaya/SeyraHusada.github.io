<?php
include 'koneksi.php';
$id=$_POST['id'];
$bangsal=$_POST['bgs'];
$tipe=$_POST['tipe'];
$ket=$_POST['kts'];
$harga=$_POST['harga'];
mysqli_query($koneksi, "insert into ruanginap values('$id','$bangsal', '$tipe', '$ket', '$harga')");
header("location: ruanginap.php")
?>