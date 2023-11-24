<?php include('incudes/header.php'); 
include('../koneksi.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pasien
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>Id Pasien</td>
                            <td>Nama</td>
                            <td>Gender</td>
                            <td>Tanggal lahir</td>
                            <td>Alamat</td>
                            <td>Nomor Telepon</td>
                            <td>Aksi</td>
                        </tr>
                        </thead>
                        <?php
                        $data=mysqli_query($koneksi, "select * from pasien");
                        while($tampil=mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $tampil['Id_pasien'] ?></td>
                                <td> <?php echo $tampil['Nama'] ?></td>
                                <td> <?php echo $tampil['Jenis_kelamin'] ?></td>
                                <td> <?php echo $tampil['Tanggal_lahir'] ?></td>
                                <td> <?php echo $tampil['Alamat'] ?></td>
                                <td> <?php echo $tampil['Nomor_telepon'] ?></td>
                                <td>
                                    <a class="badge badge-sm bg-gradient-secondary class="hapus-button" href="../hapus-pasien.php?id=<?php echo $tampil['Id_pasien']; ?>">Hapus</a>
                                    <a class="badge badge-sm bg-gradient-success class="edit-button" href="../edit-pasien.php?id=<?php echo $tampil['Id_pasien'];?>">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        <?php                       
                        }
                        ?>
                    </table>
                    <a href="input-pasien.php" class="btn btn-primary" >Tambahkan Data Pasien</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('incudes/footer.php'); ?>