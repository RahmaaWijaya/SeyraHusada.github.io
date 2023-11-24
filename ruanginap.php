<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tabel Ruang Inap</h3>
    <table border="1">
        <tr>
            <td>Id Ruang</td>
            <td>Bangsal</td>
            <td>Tipe Kamar</td>
            <td>Ketersediaan</td>
            <td>Harga per Malam</td>
            <td>Aksi</td>
        </tr>
        <?php
            include "koneksi.php";
            $data = mysqli_query($koneksi, "select * from ruanginap");
            while($tampil=mysqli_fetch_array($data)){
        ?>
        
        <tr>
            <td><?php echo $tampil['Id_room']?></td>
            <td><?php echo $tampil['Bangsal']?></td>
            <td><?php echo $tampil['Tipe_Kamar']?></td>
            <td><?php echo $tampil['Ketersediaan']?></td>
            <td><?php echo $tampil['HargaperMalam']?></td>
            <td>
                <a href="hapus-ruanginap.php ?id= <?php echo $tampil['Id_room'];?>">Hapus</a>
                <a href="edit-ruanginap.php ?id= <?php echo $tampil['Id_room'];?>">Edit</a>
            </td>
        </tr>
        <?php    
            }
        ?>
    </table>
    <a href="input-ruanginap.php">Tambahkan Data Baru</a>
</body>
</html>