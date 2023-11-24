<?php include('incudes/header.php');
include('../koneksi.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Jadwal Periksa
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
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
                        </thead>
                        <?php
                        $data=mysqli_query($koneksi, "select * from jadwalperiksa");
                        while($tampil=mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                            <td> <?php echo $tampil['Id_JP'] ?></td>
                            <td> <?php echo $tampil['Id_pasien'] ?></td>
                            <td> <?php echo $tampil['Id_dokter'] ?></td>
                            <td> <?php echo $tampil['Nama_dokter'] ?></td>
                            <td> <?php echo $tampil['Tanggal'] ?></td>
                            <td> <?php echo $tampil['Jam'] ?></td>
                            <td> <?php echo $tampil['Keluhan'] ?></td>
                                <td>
                                    <a class="badge badge-sm bg-gradient-secondary" class="hapus-button" href="../hapus-jadwalperiksa.php?id=<?php echo $tampil['Id_JP']; ?>">Hapus</a>
                                    <a class="badge badge-sm bg-gradient-success" class="edit-button" href="../edit-jadwalperiksa.php?id=<?php echo $tampil['Id_JP'];?>">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        <?php                       
                        }
                        ?>
                    </table>
                    <a href="input-jadwalperiksa.php" class="btn btn-primary">Tambahkan Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('incudes/footer.php'); ?>