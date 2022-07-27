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
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/animate/animate.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>styleundangan.css">

  <title>Undangan Weeding</title>
    <script>
    var hostname = "<?= base_url() ?>"
  </script>
</head>

<body class="bgbody2">
  <div class="container m-md-2">
    <div class="row">
      <div class="col-md-4 d-none d-md-block"></div>
      <div class="col-md-6 col-sm-12">
        <div class="card bgbody min-vh-100">
          <div class="card-body">
            <h5 class="text-center textundangan">The wedding of</h5><br>
            <ul class="list-unstyled">
            <li><h2 class="text-center texthome fw-bold animate__animated  animate__fadeInLeft animate__slow" >Akmad Nudin (Adex)</h2></li>
            <li><h1 class="text-center texthome">&</h1></li>
            <li class="mb-5"><h2 class="text-center texthome fw-bold animate__animated  animate__fadeInRight animate__slow" >Devi Fitriyani</h2></li>
           <figure style=" margin-top: -48px !important;">
            <div class="envelope-wrapper">
              <div id="envelope" class="close">
                <div class="front flap"></div>
                <div class="front pocket">
                </div>
                <div class="letter ">
                  <div class="words line1 w-100">
                      <h6 class="textundangan">Kepada Yth.Bpk/Ibu/Saudara/i</h6><br>
                  </div>
                  
                  <div class="words line2"> <h6 class="text-center textundangan"><?= $detail=='none' ? 'Anonymouse' : $detail->nama ?></h6></div>
                  <div class="words line3 d-flex justify-item-center"></div>
                  <div class="words line4"></div>
                </div>
                <div class="hearts">
                  <div class="heart a1"></div>
                  <div class="heart a2"></div>
                  <div class="heart a3"></div>
                </div>
                <button class="btn position-absolute btn-sm btn-primary mouse btnbuka  btnoption textundangan"
                  style="z-index: 10; top: 15%; left: 30%;" data-nama="<?= $detail=='none' ? 'Anonymouse' : $detail->nama ?>" data-isi="<?= $detail=='none' ? base64_encode('guest1') : base64_encode($detail->username) ?>">Lihat Undangan</button>
                <figure>
                <img src="<?= base_url('assets/') ?>src/unlock.png" width="60" class="position-absolute btngambar rounded-circle btnunlock mouse"
                  id="imgplus" title="Buka Undangan" style="z-index: 5;top: 50%;left: 41%;" alt="">
                  <figcaption class="position-absolute" style="z-index: 6;top: 80%;left: 10%;" alt=""><span style="font-size: 9px;">klik gembok untuk membuka undangan</span></figcaption>
                </figure>
              </div>
            </div>
            <figcaption class="text-center" style="
            margin-top: -100px;
        "><span class="textundangan">Mohon Maaf Apabila ada kesalahan dalam Penulisan nama dan gelar</span></figcaption>
           </figure>
           
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
  </div>
  <script src="<?= base_url('assets/') ?>jquery.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url('assets/') ?>jsundanga.js"></script>
</body>

</html>