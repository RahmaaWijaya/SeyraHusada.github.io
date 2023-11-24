<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit ruang inap</title>
</head>
<body>
    <a href="ruanginap.php">Kembali</a>
    <h3>Edit Ruang Inap</h3>
    <?php
    include 'koneksi.php';
    $room = $_GET['id'];
    $data =mysqli_query($koneksi, "select * from ruanginap where Id_room='$room'");
    while ($tampil = mysqli_fetch_array($data)){
    ?>
    <form method = "post" action="edit-aksi-ruanginap.php">
        <table>
            <tr>
                <td>Id Ruang Inap</td>
                <td><input type="number" name ="id" value="<?php echo $tampil['Id_room']; ?>"></td>
            </tr>
            <tr>
                <td>Bangsal</td>
                <td><input type="text" name ="bgs" value="<?php echo $tampil['Bangsal']; ?>"></td>
            </tr>
            <tr>
                <td>Tipe Kamar</td>
                <td><input type="text" name ="tipe" value="<?php echo $tampil['Tipe_Kamar']; ?>"></td>
            </tr>
            <tr>
                <td>Ketersediaan</td>
                <td><input type="text" name ="kts" value="<?php echo $tampil['Ketersediaan']; ?>"></td>
            </tr>
            <tr>
                <td>Harga PerMalam</td>
                <td><input type="text" name ="harga" value="<?php echo $tampil['HargaperMalam']; ?>"></td>
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