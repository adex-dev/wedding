<?php if ($this->input->get('isimodal') == 'giftaway') { ?>
  <div class="modal fade modalgift" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gift Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="card text-center shadow-lg" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title">Alamat Penerima</h5>
              <p class="card-text">Devi Fitriyani <br>089669775370.</p>
              <p class="card-text copyalamat">Blok Klampok, RT.002/004,Juntiweden,Kec.Juntinyuat,Kab.Indramayu - Jawabarat,45282</p>
              <p><button class="btn btn-sm btn-outline-info mt-3 mouse btnsalinalamat"><i class="fa fa-copy"></i> Salin Alamat pengiriman</button></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<?php } else if ($this->input->get('isimodal') == 'transfer') { ?>
  <div class="modal fade modaltransfer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Gift Informasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="card text-center shadow-lg" style="width: 50rem;">
            <div class="card-body">
              <table class="table w-100">
                <tbody>
                  <tr>
                    <td>Akmad Nudin</td>
                    <td>BNI</td>
                    <td> 0346527636</td>
                    <td><button data-bank="12345678910123" class="btn btn-sm btn-outline-info mt-3 mouse btnsalintransfer"><i class="fa fa-copy"></i> Salin Nomer BNI</button></td>
                  </tr>
                  <tr>
                    <td>Akmad Nudin</td>
                    <td>BCA</td>
                    <td> 4780353711</td>
                    <td><button data-bank="12345678910123" class="btn btn-sm btn-outline-info mt-3 mouse btnsalintransfer"><i class="fa fa-copy"></i> Salin Nomer BCA</button></td>
                  </tr>
                  <tr>
                    <td>Devi Fitriyani</td>
                    <td>BCA</td>
                    <td> 6430197795</td>
                    <td><button data-bank="12345678910123" class="btn btn-sm btn-outline-info mt-3 mouse btnsalintransfer"><i class="fa fa-copy"></i> Salin Nomer BCA</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<?php } else if ($this->input->get('isimodal') == 'tambahtamu') { ?>
  <div class="modal fade modaltambahtamu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Tamu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="card text-center shadow-lg" style="width: 50rem;">
            <div class="card-body">
              <form class="tbtamu">
                <div class="mb-3">
                  <label for="username" class="form-label">Nama Panggilan</label>
                  <input autocomplete="empty" autofocus type="text" class="form-control" name="username" placeholder="Nama Panggilan">
                </div>
                <div class="mb-3">
                  <label for="nampang" class="form-label">Nama Panjang</label>
                  <input autocomplete="empty" autofocus type="text" class="form-control" name="nampang" placeholder="Nama Panjang">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
<?php } ?>