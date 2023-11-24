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
                <h4>Tambahkan Data Jadwal Periksa</h4>
            </div>
            <div class="card-body">
                <form method = "post" action="../input-aksi-jadwalperiksa.php">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Id Jadwal Periksa</label>
                            <input type="number" name ="id" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Id Pasien</label>
                            <input type="number" name ="pasien" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Id Dokter</label>
                            <input type="number" name ="dokter" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Nama Dokter</label>
                            <input type="text" name ="nmdokter" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Tanggal</label>
                            <input type="date" name ="tgl" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Jam</label>
                            <input type="text" name ="jam" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Keluhan</label>
                            <input type="text" name ="keluhan" class="form-control">
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