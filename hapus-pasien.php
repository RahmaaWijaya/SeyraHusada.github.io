<?php
include 'koneksi.php';
$id= $_GET ['id'];
mysqli_query($koneksi,"delete from pasien where Id_pasien='$id'");
header ("location:pasien.php");          
?>