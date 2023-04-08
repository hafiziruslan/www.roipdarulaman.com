<!doctype html>
<html lang='ms-MY' data-bs-theme='dark'>

  <head>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.css' integrity='sha256-MqxHKXoPHhIxNW13oU/DJXy7YisI6dDxk4Mzbu4YIGc=' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css' integrity='sha256-4RctOgogjPAdwGbwq+rxfwAmSpZhWaafcZR9btzUk18=' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/221737b641.js' crossorigin='anonymous'></script>
  </head>

  <body>
    <footer class='footer pt-1 page-footer font-small bg-body-tertiary text-center'>
      <div class='container'>
        <div class='row my-2'>
          <div class='col-lg-8 mx-auto my-1 text-md-start'>
            <h5 class='text-uppercase mb-2 fw-bold'>Sumbangan</h5>
            <p class='mb-2'>Sumbangan &amp; Derma anda membantu Penyelidikan &amp; Pembangunan serta Perkhidmatan kami tersedia untuk anda sepanjang masa di mana sahaja.</p>
            <table class='table table-sm table-bordered text-center align-middle text-wrap my-0 mx-auto w-auto' style='white-space: nowrap'>
              <tbody>
                <tr>
                  <th>Nama</th>
                  <td>PERSATUAN PEMINAT RADIO KOMUNIKASI &#40;ROIP &#40;RADIO OVER INTERNET PROTOCOL&#41;&#41;</td>
                </tr>
                <tr>
                  <th>Bank</th>
                  <td>BANK MUAMALAT MALAYSIA BERHAD / BMMBMYKL</td>
                </tr>
                <tr>
                  <th>Akaun</th>
                  <td>1214 0000 4377 12</td>
                </tr>
              </tbody>
            </table>
            <p class='my-1 text-center'>Kami juga menerima <a class='link-primary' href='#' onClick='DonateWindow=window.open("https://payment.tngdigital.com.my/sc/bDLnBmDoDq", "TNGD RoIPMARS Donation", "width=800,height=600"); return false;'>TnG eWallet</a> | <a class='link-primary' href='#' onClick='DonateWindow=window.open("https://toyyibpay.com/sumbanganroipmars", "FPX Donation", "width=800,height=600"); return false;'>FPX MY Banks</a> | <a class='link-primary' href='#' onClick='DonateWindow=window.open("https://donate.stripe.com/5kA8AceIg7Gegbm5kk", "Stripe Donation", "width=800,height=600"); return false;'>Debit/Kredit Kad</a></p>
            <p class='my-0 text-center'>&mdash; DARI ANDA KEMBALI KEPADA ANDA &mdash;</p>
          </div>
          <div class='col-lg-4 mx-auto my-1'>
            <h5 class='text-uppercase mb-2 fw-bold text-md-end'>Hubungi Kami</h5>
            <div class='d-grid gap-1 d-md-flex justify-content-md-end mb-2'>
              <a type='button' class='btn btn-outline-info rounded-5 me-md-2' href='mailto:member@roipmars.org.my?subject=Email%20Sent%20from%20Website'><i class='bi-envelope-at'></i> member@roipmars.org.my</a>
              <button type='button' class='btn btn-outline-info rounded-5' data-bs-toggle='modal' data-bs-target='.bd-subnewsletter-modal-xl'><i class='bi-envelope-paper'></i> Langgan surat berita kami</button>
            </div>
            <div class='modal fade bd-subnewsletter-modal-xl' tabindex='-1' role='dialog' aria-labelledby='subnewsletterModalLabel' aria-hidden='true'>
              <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                  <div class='modal-body'>
                    <div class='ratio ratio-1x1'>
                      <iframe src='https://1306b3f7.sibforms.com/serve/MUIEAIR2UxOW8JezeVtN05wHT8tqVrcROKOSDLHHB5BNy1LHST-CbEPqTvRhQe5_CrrvOOmbedVNkoHAJxlEwQ8tbScw_7eHtjByIUNLUHOsQBo7rmMribZ9ZpPLC89V-9lSyMybFpSBE8ClRHD6itpcxnb_bpZk-06g7sjz4NaQn2gIAlL_0HNtA_BA7UvZT5jIptMIZetcXcSB'></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='d-md-flex justify-content-md-end opacity-75'>
              <img class='img-fluid rounded-5 bg-body-tertiary me-md-2' loading='lazy' src='https://www.hamqsl.com/solar101sc.php?bgcolor=dark&back=transparent&heline=eve'>
            </div>
          </div>
        </div>
        <div class='row my-2 d-flex align-items-center'>
          <div class='col-md-9'>
            <p class='text-md-start font-monospace user-select-none'><a href='https://www.roipmars.org.my/policies' class='text-reset text-decoration-none pe-auto'>Polisi Perkhidmatan</a><span class='text-body-tertiary'>&#124; <i class='fa-solid fa-code'></i> <i class='fa-brands fa-github'></i> <i class='fa-brands fa-php'></i> <i class='fa-brands fa-html5'></i> <i class='fa-brands fa-bootstrap'></i> <i class='fa-brands fa-css3'></i> <i class='fa-brands fa-font-awesome'></i> <i class='fa-brands fa-cloudflare'></i><br>
                <?php date_default_timezone_get();
                $fileindir = filemtime(scandir(__DIR__)[0]);
                echo 'Kemaskini: ' . date('d/m/Y, h:i A', $fileindir); ?> |
                <?php function getVisitorIp()
                {
                  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ipAdress = $_SERVER['HTTP_CLIENT_IP'];
                  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                  } else {
                    $ipAdress = $_SERVER['https://api64.ipify.org'];
                  }
                  return $ipAdress;
                }
                echo 'IP Anda: ' . getVisitorIp(); ?><br><i class='bi-c-circle'></i> 2020&ndash;
                <script>document.write(new Date().getFullYear())</script> Hak Cipta Terpelihara. | PERSATUAN PEMINAT RADIO KOMUNIKASI &#40;ROIP &#91;RADIO OVER INTERNET PROTOCOL&#93;&#41; PPM-006-10-01062020
              </span></p>
          </div>
          <div class='col-md-3 ml-lg-0 mb-3'>
            <div class='text-md-end'>
              <a class='text-reset text-decoration-none' href='https://www.facebook.com/groups/240269310577618/'><i class='fa-brands fa-facebook-f h1 mx-1 my-0' style='color: #17A9FD'></i></a>
              <a class='text-reset text-decoration-none' href='https://fb.com/roipmars.org.my'><i class='bi-facebook h1 mx-1' style='color: #0165E1'></i></a>
              <a class='text-reset text-decoration-none' href='https://t.me/marsts3servercyberjaya'><i class='bi-telegram h1 mx-1' style='color: #0088cc'></i></a>
              <a class='text-reset text-decoration-none' href='https://wa.me/c/60333960874'><i class='bi-whatsapp h1 mx-1' style='color: #25D366'></i></a>
              <a class='text-reset text-decoration-none' href='#' onClick='TSLoginWindow=window.open("https://www.roipmars.org.my/applogin", "Login RoIPMARS Comm Apps", "width=800,height=600"); return false;'><i class='bi-headset h1 mx-1'></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.js' integrity='sha256-7beepUSyCg95tu27CxW8PfyK7VV3X4XUVksYGBcSLaw=' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.js' integrity='sha256-8bk2Bq9Apy6HOcSWX4unJYw/3qZ5HWynocWHelfksQA=' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.js' integrity='sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=' crossorigin='anonymous'></script>
  </body>

</html>