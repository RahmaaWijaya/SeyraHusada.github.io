<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Pasien</title>
</head>
<body>
    <a href="jadwalperiksa.php">Kembali</a>
    <h3>Edit Jadwal Periksa</h3>
    <?php
    include 'koneksi.php';
    $jadwalperiksa = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from jadwalperiksa where Id_JP='$jadwalperiksa'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form method = "post" action="edit-aksi-jadwalperiksa.php">
        <table>
            <tr>
                <td>Id Jadwal Pasien</td>
                <td><input type="number" name ="id" value="<?php echo $tampil['Id_JP']; ?>"></td>
            </tr>
            <tr>
                <td>Id Pasien</td>
                <td><input type="number" name ="pasien" value="<?php echo $tampil['Id_pasien']; ?>"></td>
            </tr>
            <tr>
                <td>Id Dokter</td>
                <td><input type="number" name ="dokter" value="<?php echo $tampil['Id_dokter']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Dokter</td>
                <td><input type="text" name ="nmdokter" value="<?php echo $tampil['Nama_dokter']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name ="tgl" value="<?php echo $tampil['Tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name ="jam" value="<?php echo $tampil['Jam']; ?>"></td>
            </tr>
            <tr>
                <td>Keluhan</td>
                <td><input type="text" name ="keluhan" value="<?php echo $tampil['Keluhan']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php    
    }
    ?>
</body>
</html>