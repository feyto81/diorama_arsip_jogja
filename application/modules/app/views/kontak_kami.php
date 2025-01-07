<main>

  <!-- Page Banner -->
  <div class="container-fluid no-padding page-banner">
    <!-- Container -->
    <div class="container">
      <div class="page-title">
        <h3>Kontak Kami</h3>
        <h6>Lihat Alamat Kami</h6>
      </div>
      <div class="page-breadcrumb">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
        </ol>
        <h4>Kontak Kami</h4>
      </div>
    </div><!-- Container /- -->
  </div><!-- Page Banner /- -->

  <!-- Contact Section -->
  <div class="container-fluid no-padding contact-section">
    <!-- Container -->
    <div class="container">
      <!-- Row -->
      <div class="row contact-details">
        <div class="col-md-4 col-sm-4 col-xs-6 cnt-detail">
          <i class="icon icon-Headset"></i>
          <div class="cnt-detail-box">
            <h3>Call us</h3>
            <p><a href="tel:+<?= @$identitas['phone'] ?>" title="+<?= @$identitas['phone'] ?>"><?= @$identitas['phone'] ?></a></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 cnt-detail">
          <i class="icon icon-Mail"></i>
          <div class="cnt-detail-box">
            <h3>E-mail</h3>
            <p><a href="mailto:<?= @$identitas['email'] ?>" title="+<?= @$identitas['email'] ?>"><?= @$identitas['email'] ?></a></p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 cnt-detail">
          <i class="icon icon-Pointer"></i>
          <div class="cnt-detail-box">
            <h3>Alamat</h3>
            <p><?= @$identitas['address'] ?></p>
          </div>
        </div>
      </div><!-- Row /- -->
      <!-- Row -->
      <div class="row cnt-from-map">

        <div class="col-md-12 col-sm-12 map-section">
          <iframe src="<?= @$identitas['maps_marker'] ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- Map Section /- -->
      </div><!-- Row -->
    </div><!-- Container /- -->
  </div><!-- Contact Section /- -->

</main>