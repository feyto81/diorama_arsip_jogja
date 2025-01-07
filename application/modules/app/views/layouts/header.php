<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= @$title ?></title>

  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>dist/frontend/images/logo.jpg" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>dist/frontend/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>dist/frontend/images/apple-touch-icon-72x72-precomposed.html">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>dist/frontend/images/apple-touch-icon-57x57-precomposed.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/libraries/lib.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/css/navigation-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>dist/frontend/css/shortcode.css">
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
  <div class="main-container">
    <div id="site-loader" class="load-complete">
      <div class="loader">
        <div class="loader-inner ball-clip-rotate">
          <div></div>
        </div>
      </div>
    </div>
    <header class="container-fluid no-padding header-section" style="background-color: #1D2124;">
      <div id="slidepanel">
        <div class="container-fluid no-padding top-header">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-sm-7 hour-block">
                <p><span>Jadwal Museum</span> <?= @$identitas['jadwal_keterangan'] ?></p>
              </div>
              <div class="col-md-5 col-sm-5 social-block">
                <p>Juga bisa melihat di:</p>
                <ul>
                  <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="fa fa-vimeo"></i></a></li>
                  <li><a href="#" title="Facebook"><i class="fa fa-pinterest-p"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12 col-sm-12 col-xs-12 no-padding logo-block">
            <div class="col-md-4 h-logo">
              <a href="<?= site_url('app/home') ?>" title="Logo"><img src="<?= base_url() ?>dist/frontend/images/logo.jpg" style="height:60px;" alt="Logo" /></a>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 cnt-content">
              <div class="cnt-detail">
                <i class="icon icon-Pointer"></i>
                <p style="color:white"><?= @$identitas['address'] ?></p>
                <p style="color:white"><?= @$identitas['company_name'] ?></p>
              </div>
              <div class="cnt-detail">
                <i class="icon icon-Phone"></i>
                <p><a href="tel:+<?= @$identitas['phone'] ?>" style="color:white" title="<?= @$identitas['phone'] ?>"><?= @$identitas['phone'] ?></a></p>
                <p><a href="mailto:<?= @$identitas['email'] ?>" style="color:white" title="<?= @$identitas['email'] ?>"><?= @$identitas['email'] ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding menu-block">
        <div class="container">
          <nav class="navbar navbar-default ow-navigation">
            <div id="loginpanel" class="desktop-hide">
              <div class="right" id="toggle">
                <a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
                <a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
              </div>
            </div>
            <div class="navbar-header">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.html" class="navbar-brand">Diorama<i>Arsip Jogja</i></a>
            </div>
            <!-- Menu Icon -->
            <div class="navbar-collapse collapse" id="navbar">
              <ul class="nav navbar-nav">
                <li><a href="<?= site_url('app/home') ?>" title="Home">Home</a></li>
                <li><a href="javascript:void(0)" title="Tentang Kami">Tentang Kami</a></li>
                <li><a href="javascript:void(0)" title="Kegiatan">Kegiatan</a></li>
                <li><a href="<?= site_url('app/galeri') ?>" title="Galeri">Galeri</a></li>
                <li><a href="<?= site_url('app/berita') ?>" title="Berita">Berita</a></li>
                <li><a href="contactus.html" title="Kontak Kami">Kontak Kami</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>