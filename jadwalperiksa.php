<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tabel Jadwal Periksa</h3>
    <table border='1'>
        <tr>
            <td>Id JP</td>
            <td>Id Pasien</td>
            <td>Id Dokter</td>
            <td>Nama Dokter</td>
            <td>Id Tanggal</td>
            <td>Id Jam</td>
            <td>Id Keluhan</td>
            <td>Aksi</td>
        </tr>

        <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi, "select * from jadwalperiksa");
        while($tampil=mysqli_fetch_array($data)){
        ?>
        <tr>
            </tr>
            <td> <?php echo $tampil['Id_JP'] ?></td>
            <td> <?php echo $tampil['Id_pasien'] ?></td>
            <td> <?php echo $tampil['Id_dokter'] ?></td>
            <td> <?php echo $tampil['Nama_dokter'] ?></td>
            <td> <?php echo $tampil['Tanggal'] ?></td>
            <td> <?php echo $tampil['Jam'] ?></td>
            <td> <?php echo $tampil['Keluhan'] ?></td>
            <td>
                <a href="hapus-jadwalpasien.php ?id= <?php echo $tampil ['Id_JP']; ?>">Hapus</a>
                <a href="edit-jadwalpasien.php ?id= <?php echo $tampil ['Id_JP']; ?>">Edit</a>
            </td>
        <?php    
        }
        ?>
    </table>
    <a href="input-jadwalperiksa.php">Tambahkan Data Baru</a>
</body>
</html>