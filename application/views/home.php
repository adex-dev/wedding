<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0' name='viewport' />
  <link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='icon' sizes='32x32' />
  <link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='icon' sizes='192x192' />
  <link href='https://1.bp.blogspot.com/-nOeEyPbdB0o/XiUd3oPKksI/AAAAAAAAABc/5dcEFCz7cGY_WlCz6PFVAq_vidVgdjZAgCPcBGAYYCw/s1600/logo.png' rel='apple-touch-icon-precomposed' />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="<?= base_url('assets/') ?>styleundangan.css">

  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/aos/aos.css">

  <title>Undangan Weeding</title>
  <script>
    var hostname = "<?= base_url() ?>"
  </script>
</head>

<body class="bgbody2" style="
    overflow-x: hidden;
">
  <div class="btntop">
    <img src="<?= base_url('assets/src/play.png') ?>" class="rounded-circle musik mouse btnplay">
    <?php $id =  $this->session->userdata('username'); ?>
    <img src="<?= base_url('assets/src/home.png') ?>" onclick="window.location.href='<?= site_url('page/') . $id ?>'" class="rounded-circle musik2 mouse">
  </div>
  <div class="container-md container-fluid m-md-2">
    <div class="row">
      <div class="col-md-4 d-none d-md-block"></div>
      <div class="col-md-6 col-sm-12">
        <div class="card  min-vh-100 w-100">
          <div class="card-body foto2 position-relative d-flex justify-content-center">
            <div class="position-absolute tulisannama text-center">
              <h1 class=" fs-3 textnama "><?= $this->session->userdata('nama'); ?></h1>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" class="card   min-vh-100 w-100 mt-2">
          <div class="card-body foto1 position-relative d-flex align-items-center justify-content-center">
            <div class="position-absolute textundangan" style="top: 60px;">2022-04-20</div>
            <div class="card textcard" style="background: #ffffff3d;">
              <p class="text-center surat" data-aos="fade-up">“Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.”

                (QS. Ar- Rum 21)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card  min-vh-100 w-100" data-aos="fade-up" data-aos-duration="3000">
          <div class="card-body daun bgfull position-relative d-flex justify-content-center align-items-center">
            <div class="row">
              <div class="col-12 text-center">
                <ul class="list-unstyled" data-aos="fade-right">
                  <li>
                    <h1 class="textundangan" style="color: white;font-weight: 500 !important;">Akmad Nudin</h1>
                  </li>
                  <li>
                    <h6 class="textundangan">Putra Kedua dari</h6>
                  </li>
                  <li>
                    <h6 class="textundangan">Bapak Sution (Alm)</h6>
                  </li>
                  <li>
                    <h6 class="textundangan"> & Ibu Sarkesi </h6>
                  </li>
                </ul>
              </div>
              <div class="col-12 text-center">
                <h1>&</h1>
              </div>
              <div class="col-12 text-center">
                <ul class="list-unstyled" data-aos="fade-left">
                  <li>
                    <h1 class="textundangan" style="color: white;font-weight: 500 !important;">Devi Fitriyani</h1>
                  </li>
                  <li>
                    <h6 class="textundangan">Putri Pertama dari</h6>
                  </li>
                  <li>
                    <h6 class="textundangan">Bapak Tubah (Alm)</h6>
                  </li>
                  <li>
                    <h6 class="textundangan"> & Ibu Kurniasih </h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card  min-vh-100 w-100" data-aos="fade-up" data-aos-duration="3000" style="background: #fde0e5;">
          <div class="card-body daun  position-relative d-flex justify-content-center align-items-center">
            <img src="<?= base_url('assets/') ?>src/daunbawah2.png" class="position-absolute bottom-0" style="width: 30%;" alt="">
            <div class="row">
              <div class="col-12 text-center">
                <ul class="list-unstyled" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <li class="text-center">
                    <h1 class="textundangan" style="color: orange;font-weight: 500 !important;">Akad Nikah</h1>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Sabtu, 06 Agustus 2022</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">09.00 s/d 10.00 WIB</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Blok Klampok,RT.002/004</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Ds.Juntiweden,Kec.Juntinyuat</h6>
                  </li>
                  <li class="text-resepsi text-center">
                    <h6 class="textundangan">Kab.Indramayu - Jawabarat,45282</h6>
                  </li>
                </ul>
              </div>
              <div class="col-12 text-center">
                <h1>&</h1>
              </div>
              <div class="col-12 text-center">
                <ul class="list-unstyled" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <li class="text-center">
                    <h1 class="textundangan" style="color: orange;font-weight: 500 !important;">Resepsi</h1>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Sabtu, 06 Agustus 2022</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">09.00 s/d 10.00 WIB</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Blok Klampok,RT.002/004</h6>
                  </li>
                  <li class="text-center">
                    <h6 class="textundangan">Ds.Juntiweden,Kec.Juntinyuat</h6>
                  </li>
                  <li class="text-resepsi text-center">
                    <h6 class="textundangan">Kab.Indramayu - Jawabarat,45282</h6>
                  </li>
                  <li><a href="https://goo.gl/maps/42bNXkPDhG5QQAzh6" target="_blank" class="btn btn-sm btn-outline-primary"><i class="fa fa-map-pin"></i> Lihat Peta Lokasi</a></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card  min-vh-100 w-100" style="background: #fde0e5;" data-aos="fade-up" data-aos-duration="3000">
          <div class="card-body daun position-relative d-flex justify-content-center">
            <div class="row">
              <div class="col-12">
                <div class="text-center my-0 d-flex justify-content-center flex-wrap">
                  <form class="RSVP">
                    <div class="mb-3">
                      <h1 class="textundangan2">RSVP</h1>
                      <p class="textundangan">Kami tidak sabar menunggu hari pernikahan kami bersama Bapak/Ibu/Saudara/i, mohon konfirmasi kehadiran Bapak/Ibu/Saudara/i. Terima kasih</p>
                    </div>
                    <div class="mb-3">
                      <select oninvalid="this.setCustomValidity('Mohon untuk memilih terlebih dahulu')" oninput="setCustomValidity('')" required name="rsp" class="form-select form-select-sm">
                        <option value="">Apakah Anda Akan Hadir</option>
                        <option value="ya">Ya, Tentu hadir.</option>
                        <option value="tidak">Maaf, Belum Bisa Hadir</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-sm btn-outline-danger">Kirim Konfirmasi Undangan</button>
                    </div>
                  </form>
                  <div class="container">
                    <div class="mt-0">
                      <h1 class="textundangan2">Kirim Hadiah</h1>
                      <!-- <button class="btntes btn btn-primary">tes Alert</button> -->
                      <p class="textundangan">Bagi keluarga dan sahabat yang ingin mengirimkan hadiah, silakan mengirimkannya melalui tautan berikut:</p>
                      <div class="d-flex justify-content-around">
                        <button class="btn btn-primary btnmodal" data-popupmodal="giftaway"><i class="fa fa-gift"></i></button>
                        <button class="btn btn-primary mx-5 btnmodal" data-popupmodal="transfer"><i class="fas fa-wallet"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="mt-3">
                      <h1 class="textundangan2">Tamu Undangan</h1>
                      <hr>
                      <form class="tamuundangan">
                        <div class="mb-3">
                          <label for="nama">Nama</label>
                          <input required autocomplete="off" name="nama" type="text" placeholder="masukan nama Bpk/Ibu/Saudara/i" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                          <label for="catatan" class="form-label">Ucapan</label>
                          <textarea required placeholder="tulis ucapan" autocomplete="empty" class="form-control form-control-sm" name="catatan" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                          <button class="btn btn-sm btn-outline-danger">Kirim Ucapan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="container undanganbook" style="min-height: 30vh; max-height: 30vh; overflow-y: scroll;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card bgdown min-vh-100 w-100">
          <div class="card-body  position-relative d-flex justify-content-center align-items-center">
            <img src="<?= base_url('assets/') ?>src/daunatas.png" class="w-100 position-absolute top-0" alt="">
            <div class="row">
              <div class="col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                  <div class="carousel-inner ">
                    <div class="carousel-item active position-relative" style="max-height: 400px;">
                      <img src="<?= base_url('assets/') ?>src/foto1.png" class="d-block w-100" style="max-height: 350px;" alt="...">
                    </div>
                    <div class="carousel-item position-relative" style="max-height: 400px;">
                      <img src="<?= base_url('assets/') ?>src/foto2.png" class="d-block w-100" style="max-height: 350px;" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">
      <div class="col-md-4 d-none d-md-block">
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card bgfull min-vh-100 w-100">
          <div class="card-body position-relative d-flex justify-content-center align-items-center">
            <img src="<?= base_url('assets/') ?>src/daunatas.png" class="w-100 position-absolute top-0" alt="">
            <img src="<?= base_url('assets/') ?>src/daunbawah.png" class="w-100 position-absolute bottom-0" alt="">
            <div class="row">
              <div class="col-12">
                <h3 class="texthome text-center">Thank You</h3><br>
                <h1 class="fw-bold text-center textundangan">Akmad Nudin (ADEX)<br> & <br> Devi Fitriyani</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-none d-md-block"></div>
    </div>
    <div class="row">

      <audio src="<?= base_url('assets/src/Californication.mp3') ?>" id="myAudio"></audio>
      <span class="text-center">created by @akmadnudin.inc</span>
    </div>
  </div>
  <div class="viewModal" style="display: none;"></div>
  <script src="<?= base_url('assets/') ?>jquery.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/') ?>vendor/sweetalert2/sweetalert2.min.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="<?= base_url('assets/') ?>jsundanga.js"></script>
</body>

</html>