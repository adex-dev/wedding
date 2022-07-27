$(document).ready(function () {
  var envelope = $("#envelope");

  function open() {
    envelope.addClass("open").removeClass("close");
  }
  function close() {
    envelope.addClass("close").removeClass("open");
  }
  $(document).on("click", ".btnunlock", function () {
    $(".btngambar").attr("src", hostname + "assets/src/unlocked.png");
    $('.btngambar').addClass('btnunlocked');
    $(".btngambar ").removeClass("btnunlock");
    $(".btnbuka ").addClass("btnbukaundangan");
    $(".btnbuka ").removeClass("btnoption");
    open();
  });
    $(document).on("click","[data-bs-dismiss='modal']", function() {
    e.preventDefault();
    $(".modal").remove();
		$(".modal-backdrop").remove();
		$("body").removeClass("modal-open");
  });
 
  $(document).on("click", ".btnsalin", function() {
    var alamat =$(this).data('alamat')
    navigator.clipboard.writeText(alamat);
    Swal.fire(
      'Sukses!',
      'Berhasil disalin',
      'success'
    )
  });
  $(document).on("click", ".btnsalinalamat", function() {
    var alamat = $('.copyalamat').text()
    navigator.clipboard.writeText(alamat);
    Swal.fire(
      'Sukses!',
      'Berhasil disalin',
      'success'
    )
  });
  $(document).on("click", ".btnsalintransfer", function() {
    var bank = $(this).data('bank')
    navigator.clipboard.writeText(bank);
    Swal.fire(
      'Sukses!',
      'Berhasil disalin',
      'success'
    )
  });
  $(document).on("click", ".btnunlocked", function () {
    $(".btngambar").attr("src", hostname + "assets/src/unlock.png");
    $('.btngambar').addClass('btnunlock');
    $(".btngambar ").removeClass("btnunlocked");
    $(".btnbuka ").removeClass("btnbukaundangan");
    $(".btnbuka ").addClass("btnoption");
    close();
  });
  var x = document.getElementById("myAudio");
  $(document).on("click", ".btnplay", function () {
    x.play();
    $('.musik').addClass('btnpause');
    $(".musik ").removeClass("btnplay");
    $(".musik").attr("src", hostname + "assets/src/pause.png");
  });
  $(document).on("click", ".btnpause", function () {
    x.pause();
    $('.musik').addClass('btnplay');
    $(".musik ").removeClass("btnpause");
    $(".musik").attr("src", hostname + "assets/src/play.png");
  });
  $(document).on("click", ".btnbukaundangan", function (e) {
    e.preventDefault();
    var isi = $(this).data("isi");
    var nama = $(this).data("nama");
    $.ajax({
      type: "POST",
      url: hostname+"welcome/getdata",
      data: {isi:isi,nama:nama},
      dataType: "json",
      success: function (response) {
        location.href=hostname+"home"
      }
    });
  });
  $(document).on("click", ".btntes ", function (e) {
    e.preventDefault()
    Swal.fire({
      title: 'Terima kasih!',
      text: 'Terimakasih atas doa & ucapannya...',
      imageUrl: hostname + 'assets/src/emoji/cry.png',
      imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonText: 'tutup'
    })
  });
  $('.RSVP').submit(function (e) { 
    e.preventDefault();
    let formdata = $('.RSVP').serialize()
    $.ajax({
      type: "POST",
      url: hostname+"welcome/insertkehadiran",
      data: formdata,
      dataType: "json",
      success: function (response) {
        if (response.ya) {
          Swal.fire({
            title: 'Terima kasih Bersediah Datang!',
            text: 'Terimakasih Konfirmasi kehadiran Bapak/Ibu/Saudara/i, Kami tunggu ya.....',
            imageUrl: hostname + 'assets/src/emoji/smile.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            confirmButtonText: 'tutup'
          })
        }else if(response.tidak){
          Swal.fire({
            title: 'Terimakasih',
            text: 'Terimakasih Konfirmasi kehadiran Bapak/Ibu/Saudara/i',
            imageUrl: hostname + 'assets/src/emoji/smile.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            confirmButtonText: 'tutup'
          })
        }
      }
    });
  });
  $('.tamuundangan').submit(function (e) { 
    e.preventDefault();
    let formdata = $('.tamuundangan').serialize()
    $.ajax({
      type: "POST",
      url: hostname+"welcome/isibukutamu",
      data: formdata,
      dataType: "json",
      success: function (response) {
        if (response.ya) {
          Swal.fire({
            title: 'Terima kasih!',
            text: 'Terimakasih Atas Doa Maupun Pesan dan kesan dari kehadiran Bapak/Ibu/Saudara/i.....',
            imageUrl: hostname + 'assets/src/emoji/thank-you.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            confirmButtonText: 'tutup'
          }).then(function(){
            $.ajax({
              type: 'GET',
              url: hostname + 'welcome/getbukucatatan',
              cache: false,
              async:true,
              dataType: 'json',
              success: function (response) {
              $('.undanganbook').html(response)
              $('input[name="nama"]').val('');
              $('textarea[name="catatan"]').val('');
              }
              });
          })
        }
      }
    });
  });
 $(document).on("submit", ".tbtamu ", function (e) {
    e.preventDefault();
    let formdata = $('.tbtamu').serialize()
    $.ajax({
      type: "POST",
      url: hostname+"welcome/tbtamu",
      data: formdata,
      dataType: "json",
      success: function (response) {
        location.reload()
      }
    });
  });
  window.addEventListener('load',
  function () {
    $.ajax({
    type: 'GET',
    url: hostname + 'welcome/getbukucatatan',
    cache: false,
    async:true,
    dataType: 'json',
    success: function (response) {
    $('.undanganbook').html(response)
    }
    });
  },
  false);
  $(document).on("click", ".btnmodal", function (e) {
		var isimodal = $(this).data("popupmodal");
		$.ajax({
			url: hostname + "welcome/viewmodalweb",
			dataType: "json",
			data: {
				isimodal: isimodal
			},
			cache: false,
			async: true,
			success: function (response) {
				if (response.sukses) {
					$(".viewModal").html(response.sukses).show();
					if (isimodal == "giftaway") {
            $(".modalgift").modal("show");
					} else if (isimodal == "transfer") {
						$(".modaltransfer").modal("show");
					} else if (isimodal == "tambahtamu") {
						$(".modaltambahtamu").modal("show");
					} 
				}
			},
			error: function (jqXHR, error, errorThrown) {
				if (jqXHR.status && jqXHR.status == 500) {
					Swal.fire({
						text: "Mohon Maaf Server Sedang Down.",
						icon: "error",
						showCancelButton: false,
						confirmButton: true,
					});
				} else {
					Swal.fire({
						text: "Terjadi konflik data.",
						icon: "error",
						showCancelButton: false,
						confirmButton: true,
					});
				}
			},
		});
	});
});
function select_all(obj) {
  var text_val=eval(obj);
  text_val.focus();
  text_val.select();
  r = text_val.createTextRange();
  if (!r.execCommand) return; // feature detection
  r.execCommand('copy');
}
