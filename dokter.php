<!DOCTYPE html>
<html lang="en">
    Tabel Dokter
    <table border="1">
        <tr>
            <td>Id Dokter</td>
            <td>Nama</td>
            <td>Spesialisasi</td>
            <td>Telepon</td>
            <td>Surel</td>
            <td>Aksi</td>
        </tr>
        <?php
            include "koneksi.php";
            $data=mysqli_query($koneksi, "select * from dokter");
            while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td> <?php echo $tampil['Id_dokter'] ?></td>
            <td> <?php echo $tampil['Nama'] ?></td>
            <td> <?php echo $tampil['Spesialisasi'] ?></td>
            <td> <?php echo $tampil['Nomor_tlpn'] ?></td>
            <td> <?php echo $tampil['Surel'] ?></td>
            <td>
                <a href="hapus-dokter.php?id= <?php echo $tampil ['Id_dokter']; ?>">Hapus</a>
                <a href="edit-dokter.php?id=<?php echo $tampil ['Id_dokter'];?>">Edit</a>
            </td>
        </tr>
        <?php        
            }
        ?>
    </table>
    <a href="input-dokter.php">Tambahkan Data Baru</a>
</html>