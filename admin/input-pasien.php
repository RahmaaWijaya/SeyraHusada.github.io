<?php include('incudes/header.php'); 
include('../koneksi.php');
?>
<head>
    <style>
        .form-control{
        border: 1px solid #b3a1a1 !important;
        padding: 8px 10px;
        }
    </style>
</head>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Tambahkan Data Pasien</h4>
            </div>
            <div class="card-body">
                <form method = "post" action="../input-aksi-pasien.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Id Pasien</label>
                            <input type="number" name ="id" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama</label>
                            <input type="text" name ="nama" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Gender</label>
                            <input type="text" name ="JK" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name ="tgl" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Alamat</label>
                            <input type="text" name ="alamat" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Nomor</label>
                            <input type="text" name ="tlpn" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary" value="Simpan"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('incudes/footer.php'); ?>