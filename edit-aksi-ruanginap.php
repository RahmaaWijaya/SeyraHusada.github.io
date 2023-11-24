<?php
include 'koneksi.php';
$id=$_POST['id'];
$bangsal=$_POST['bgs'];
$tipe=$_POST['tipe'];
$ket=$_POST['kts'];
$harga=$_POST['harga'];

mysqli_query($koneksi, "update ruanginap set Id_room='$id', Bangsal='$bangsal', Tipe_Kamar='$tipe', Ketersediaan='$ket', HargaperMalam='$harga' where Id_room='$id'");
header("location: ruanginap.php");
?>