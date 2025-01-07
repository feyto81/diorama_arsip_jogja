<main>

  <!-- Page Banner -->
  <div class="container-fluid no-padding page-banner">
    <!-- Container -->
    <div class="container">
      <div class="page-title">
        <h3>Galeri</h3>
        <h6>See Our <span>Great Flows</span></h6>
      </div>
      <div class="page-breadcrumb">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
        </ol>
        <h4>Galeri</h4>
      </div>
    </div><!-- Container /- -->
  </div><!-- Page Banner /- -->

  <!-- Gallery -->
  <div class="container-fluid no-padding gallery-page">



    <div class="gallery-list gallery-fitrow">
      <?php foreach (@$main as $row) : ?>

        <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding modern others">
          <img src="<?= base_url() ?>images/galeri/<?= @$row['galeri_image'] ?>" alt="Galeri" />
          <div class="gallery-content">
            <h3><?= @$row['galeri_title'] ?></h3>
            <img src="images/gallery-title-seprator.png" alt="Arrow" />
            <span>
              <a class="zoom" href="<?= base_url() ?>images/galeri/<?= @$row['galeri_image'] ?>" title="zoom"><i class="icon icon-Search"></i></a>
            </span>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div><!-- Gallery /- -->

</main>