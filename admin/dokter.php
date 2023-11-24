<?php include('incudes/header.php');
include('../koneksi.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dokter
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td>Id Dokter</td>
                            <td>Nama</td>
                            <td>Spesialisasi</td>
                            <td>Telepon</td>
                            <td>Surel</td>
                            <td>Aksi</td>
                        </tr>
                        </thead>
                        <?php
                        $data=mysqli_query($koneksi, "select * from dokter");
                        while($tampil=mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                            <td> <?php echo $tampil['Id_dokter'] ?></td>
                            <td> <?php echo $tampil['Nama'] ?></td>
                            <td> <?php echo $tampil['Spesialisasi'] ?></td>
                            <td> <?php echo $tampil['Nomor_tlpn'] ?></td>
                            <td> <?php echo $tampil['Surel'] ?></td>
                                <td>
                                    <a class="badge badge-sm bg-gradient-secondary" class="hapus-button" href="../hapus-dokter.php?id=<?php echo $tampil['Id_dokter']; ?>">Hapus</a>
                                    <a class="badge badge-sm bg-gradient-success" class="edit-button" href="../edit-dokter.php?id=<?php echo $tampil['Id_dokter'];?>">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        <?php                       
                        }
                        ?>
                    </table>
                    <a href="input-dokter.php" class="btn btn-primary" >Tambahkan Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('incudes/footer.php'); ?>