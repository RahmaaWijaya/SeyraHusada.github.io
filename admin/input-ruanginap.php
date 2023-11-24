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
                <h4>Tambahkan Data Ruang Inap</h4>
            </div>
            <div class="card-body">
                <form method = "post" action="../input-aksi-ruanginap.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Id Ruang Inap</label>
                            <input type="number" name ="id" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Bangsal</label>
                            <input type="text" name ="bgs" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Tipe Kamar</label>
                            <input type="text" name ="tipe" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Ketersediaan</label>
                            <input type="text" name ="kts" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Harga perMalam</label>
                            <input type="text" name ="haarga" class="form-control">
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