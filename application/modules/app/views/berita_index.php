<main>

  <!-- Page Banner -->
  <div class="container-fluid no-padding page-banner">
    <!-- Container -->
    <div class="container">
      <div class="page-title">
        <h3>Berita</h3>
      </div>
      <div class="page-breadcrumb">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
        </ol>
      </div>
    </div><!-- Container /- -->
  </div><!-- Page Banner /- -->

  <!-- Container -->
  <div class="container">
    <!-- Row -->
    <div class="row blog-listing">
      <!-- Content Area -->

      <div class="col-md-12 col-sm-6 col-xs-6 content-area">
        <?php


        foreach (@$main as $row) : ?>
          <article class="type-post">
            <div class="entry-cover">
              <a href="javascript:void(0)"><img src="<?= base_url() ?>/images/berita/<?= @$row['berita_image'] ?>" alt="Blog" /></a>
            </div>
            <div class="entry-header">
              <div class="title-block">
                <h3><a href="javascript:void(0)" title="<?= @$row['berita_title'] ?>"><?= @$row['berita_title'] ?></a></h3>
                <div class="author">
                  <span>by <a href="javascript:void(0)" title="<?= @$row['berita_author'] ?>"><?= @$row['berita_author'] ?></a></span>
                </div>
              </div>
            </div>
            <div class="entry-content">
              <p><?= substr($row['berita_desc'], 0, 200) ?></p>
              <div class="btn-block">
                <a href="<?= site_url('app/berita/detail/' . @$row['berita_id']) ?>" class="btn" title="Read More">Baca selengkapnya <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </article><!-- Type Post /- -->


        <?php endforeach; ?>

      </div><!-- Content Area /- -->

    </div><!-- Row /- -->


  </div><!-- Container /- -->
  <div class="padding-100"></div>

</main>