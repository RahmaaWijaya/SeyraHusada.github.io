<!DOCTYPE html>
<html lang="en">
    <a href="pasien.php">Kembali</a>
    <h3>Edit Pasien</h3>
    <?php
    include 'koneksi.php';
    $pasien = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from pasien where Id_pasien='$pasien'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form method = "post" action="edit-aksi-pasien.php">
        <table>
            <tr>
                <td>ID Pasien</td>
                <td><input type="number" name ="id" value="<?php echo $tampil['Id_pasien']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name ="nama" value="<?php echo $tampil['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name ="JK" value="<?php echo $tampil['Jenis_kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="date" name ="tgl" value="<?php echo $tampil['Tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name ="alamat" value="<?php echo $tampil['Alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor</td>
                <td><input type="text" name ="tlpn" value="<?php echo $tampil['Nomor_telepon']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php    
    }
    ?>
</html>