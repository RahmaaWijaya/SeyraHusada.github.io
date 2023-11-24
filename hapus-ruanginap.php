<?php
include 'koneksi.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from ruanginap where Id_room='$id'");
header("location: ruanginap.php");
?>