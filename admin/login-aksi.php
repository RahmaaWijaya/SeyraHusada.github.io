<?php
include("../koneksi.php");
if(!$koneksi){
    die("Koneksi gagal: ".mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
// mencari user dengan username dan password yang sama
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);
if(mysqli_num_row($result) == 1){
    header("Location: dashboard.php");
} else {
    echo "Login gagal. Silahkan cek kembali username dan password Anda.";
}
mysqli_close($koneksi);
?>