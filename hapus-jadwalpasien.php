<?php
include 'koneksi.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from jadwalperiksa where Id_JP='$id'");
header("location: jadwalperiksa.php");
?>