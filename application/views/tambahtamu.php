<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0' name='viewport'/>
  <link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='icon' sizes='32x32'/>
<link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='icon' sizes='192x192'/>
<link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='apple-touch-icon-precomposed'/>
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/animate/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>styleundangan.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>jquery.dataTables.min.css">

  <title>Undangan Weeding</title>
    <script>
    var hostname = "<?= base_url() ?>"
  </script>
</head>

<body class="bgbody2">
  <div class="container m-md-2">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="card bgbody min-vh-100">
          <div class="card-body">
          <div class="d-flex"><button class="text-center btn btn-primary textundangan btnmodal mb-4" data-popupmodal="tambahtamu">Tambah Tamu</button><br>
            <button class="text-center btn btn-primary textundangan  mb-4 mx-3">Home</button></div>
            <table class="table table-bordered mt-5 tabletmau table-info">
            <thead>
            <tr><th nowrap>Nama</th><th>Salin alamat</th></tr>
            </thead>
            <tbody>
           <?php foreach ($isidata as $value) : ?>
            <tr><td><?= $value->nama ?></td><td><button data-alamat="https://wedding.akmadnudin.com/page/<?= $value->username ?>" class="btn btn-sm btn-outline-info mt-3 mouse btnsalin w-100"><i class="fa fa-copy"></i> Salin</button></td></tr>
           <?php endforeach ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="viewModal" style="display: none;"></div>
  <script src="<?= base_url('assets/') ?>jquery.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url('assets/') ?>jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/') ?>jsundanga.js"></script>
  <script>
$(document).ready(function () {
    $('.tabletmau').DataTable();
});
  </script>
</body>

</html>