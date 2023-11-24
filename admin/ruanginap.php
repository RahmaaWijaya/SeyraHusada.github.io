<?php include('incudes/header.php');
include('../koneksi.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ruang Inap
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                        <td>Id Ruang</td>
                        <td>Bangsal</td>
                        <td>Tipe Kamar</td>
                        <td>Ketersediaan</td>
                        <td>Harga per Malam</td>
                        <td>Aksi</td>
                        </tr>
                        </thead>
                        <?php
                        $data=mysqli_query($koneksi, "select * from ruanginap");
                        while($tampil=mysqli_fetch_array($data)){
                        ?>
                        <tbody>
                            <tr>
                            <td><?php echo $tampil['Id_room']?></td>
                            <td><?php echo $tampil['Bangsal']?></td>
                            <td><?php echo $tampil['Tipe_Kamar']?></td>
                            <td><?php echo $tampil['Ketersediaan']?></td>
                            <td><?php echo $tampil['HargaperMalam']?></td>
                                <td>
                                    <a class="badge badge-sm bg-gradient-secondary" class="hapus-button" href="../hapus-ruanginap.php?id=<?php echo $tampil['Id_room']; ?>">Hapus</a>
                                    <a class="badge badge-sm bg-gradient-success" class="edit-button" href="../edit-ruanginap.php?id=<?php echo $tampil['Id_room'];?>">Edit</a>
                                </td>
                            </tr>
                            </tbody>
                        <?php                       
                        }
                        ?>
                    </table>
                    <a href="input-ruanginap.php" class="btn btn-primary">Tambahkan Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('incudes/footer.php'); ?>