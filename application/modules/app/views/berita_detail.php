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
    <div class="row blog-single">
      <!-- Content Area -->
      <div class="col-md-8 col-sm-6 col-xs-6 content-area">

        <!-- Type Post -->
        <article class="type-post">
          <div class="entry-cover">
            <a href="#"><img src="<?= base_url('') ?>images/berita/<?= @$main['berita_image'] ?>" alt="Blog" /></a>
          </div>
          <div class="entry-header">
            <div class="title-block">
              <h3><a href="#" title="Imagination of the Paintings"><?= @$main['berita_title'] ?></a></h3>
              <div class="author">
                <span>oleh <a href="#" title="<?= @$main['berita_author'] ?>"><?= @$main['berita_author'] ?></a></span>
              </div>
            </div>
          </div>
          <div class="entry-content">
            <?= @$main['berita_desc'] ?>
          </div>
        </article><!-- Type Post /- -->


      </div><!-- Content Area /- -->

      <!-- Widget Area -->
    </div><!-- Row /- -->
  </div><!-- Container /- -->

  <div class="padding-100"></div>

</main>