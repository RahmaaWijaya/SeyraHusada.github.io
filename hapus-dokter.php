<?php
include 'koneksi.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from dokter where Id_dokter='$id'");
header("location: dokter.php");
?>