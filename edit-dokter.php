<!DOCTYPE html>
<html lang="en">
    <a href="dokter.php">Kembali</a>
    <h3>Edit Dokter</h3>
    <?php
    include "koneksi.php";
    $dokter = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from dokter where Id_dokter='$dokter'");
    while($tampil = mysqli_fetch_array($data)){
    ?>
    <form method = "post" action="edit-aksi-dokter.php">
    <table>
            <tr>
                <td>ID Pasien</td>
                <td><input type="number" name ="id" value=" <?php echo $tampil['Id_dokter']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name ="nama" value=" <?php echo $tampil['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Spesialisasi</td>
                <td><input type="text" name ="sp" value=" <?php echo $tampil['Spesialisasi']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name ="tlpn" value=" <?php echo $tampil['Nomor_tlpn']; ?>"></td>
            </tr>
            <tr>
                <td>Surel</td>
                <td><input type="text" name ="Surel" value=" <?php echo $tampil['Surel']; ?>"></td>
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