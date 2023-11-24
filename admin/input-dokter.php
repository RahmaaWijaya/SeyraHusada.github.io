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
                <h4>Tambahkan Data Dokter</h4>
            </div>
            <div class="card-body">
                <form method = "post" action="../input-aksi-dokter.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Id Dokter</label>
                            <input type="number" name ="id" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama</label>
                            <input type="text" name ="nama" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Spesialis</label>
                            <input type="text" name ="sp" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Nomor Telepon</label>
                            <input type="text" name ="tlpn" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Surel</label>
                            <input type="text" name ="surel" class="form-control">
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