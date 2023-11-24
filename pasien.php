<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- css style -->
    <link rel="stylesheet" href="css/styletabel.css">
    </head>
    Tabel Pasien
    <table border="1">
        <tr>
            <td>Id Pasien</td>
            <td>Nama</td>
            <td>Gender</td>
            <td>Tanggal lahir</td>
            <td>Alamat</td>
            <td>Nomor Telepon</td>
            <td>Aksi</td>
        </tr>

        <?php
            include "koneksi.php";
            $data=mysqli_query($koneksi,"select * from pasien");
            while($tampil=mysqli_fetch_array($data)){
        ?>
        <!-- ketika sudah masuk sini harus sama dengan colom tabel yang ada di database -->
        <tr>
            <td> <?php echo $tampil['Id_pasien'] ?></td>
            <td> <?php echo $tampil['Nama'] ?></td>
            <td> <?php echo $tampil['Jenis_kelamin'] ?></td>
            <td> <?php echo $tampil['Tanggal_lahir'] ?></td>
            <td> <?php echo $tampil['Alamat'] ?></td>
            <td> <?php echo $tampil['Nomor_telepon'] ?></td>
            <td>
                <a class="hapus-button" href="hapus-pasien.php?id=<?php echo $tampil['Id_pasien']; ?>">Hapus</a>
                <a class="edit-button" href="edit-pasien.php?id=<?php echo $tampil['Id_pasien'];?>">Edit</a>
            </td>
        </tr>

        <?php
            }
        ?>
    </table>
    <a href="input-pasien.php"> Tambahkan Data Baru</a>
</html>