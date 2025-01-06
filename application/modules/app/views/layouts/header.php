<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?= @$title ?></title>

  <link rel="icon" type="image/x-icon" href="<?= base_url() ?>dist/frontend/images/favicon.ico" />
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
                <p>Also see in:</p>
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
              <a href="index.html" title="Logo"><img src="<?= base_url() ?>dist/frontend/images/logo.jpg" style="height:60px;" alt="Logo" /></a>
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
                <li><a href="javascript:void(0)" title="Home">Home</a></li>
                <li><a href="javascript:void(0)" title="Tentang Kami">Tentang Kami</a></li>
                <li><a href="javascript:void(0)" title="Kegiatan">Kegiatan</a></li>
                <li><a href="javascript:void(0)" title="Galeri">Galeri</a></li>
                <li><a href="javascript:void(0)" title="Berita">Berita</a></li>
                <li><a href="contactus.html" title="Kontak Kami">Kontak Kami</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div id="slider-section" class="container-fluid no-padding slider-section">
        <div class="rev_slider_wrapper">
          <div id="home-slider1" class="rev_slider" data-version="5.0">
            <ul>
              <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                <img src="<?= base_url() ?>dist/frontend/images/diorama_tampak_depan.jpg" alt="slider" data-bgparallax="3" data-bgposition="center center" data-duration="30000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0">
                <!-- <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 sub-title" id="slide-1-layer-1"
                  data-x="['left','left','center','center']" data-hoffset="['374','50','0','0']"
                  data-y="['top','top','top','top']" data-voffset="['245','245','145','55']"
                  data-fontsize="['48','48','48','24']"
                  data-fontweight="['600','600','600','600']"
                  data-lineheight="['56','56','56','26']"
                  data-width="['750','750','750','400']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[100%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05"
                  style="z-index: 2; word-wrap: break-word; max-width: 100%; color: #ffffff; padding: 0; letter-spacing: -0.96px; font-family: 'Poppins', sans-serif; text-transform: uppercase;">watch new <span style="color: #e2b13c;">all exhibitions</span> <br /> in <span style="color: #e2b13c;">max museum</span>
                </div>

                <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 sub-title" id="slide-1-layer-2"
                  data-x="['left','left','center','center']" data-hoffset="['374','50','0','0']"
                  data-y="['top','top','top','top']" data-voffset="['370','370','270','120']"
                  data-fontsize="['18','18','18','18']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['24','24','24','24']"
                  data-width="['750','750','750','400']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[100%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05"
                  style="z-index: 2; white-space: normal; color:#ffffff; padding: 0; letter-spacing: 1.9px; font-family: 'PT Serif', serif; font-style: italic;">
                  A man is born he's a man of means. Then along come two they got nothin' but their <br /> jeans. But they got diff'rent strokes. It takes diff'rent strokes - it takes <br /> diff'rent strokes to move the world.
                </div>
                <div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-1-layer-3"
                  data-x="['left','left','left','center']" data-hoffset="['374','50','20','-100']"
                  data-y="['top','top','top','top']" data-voffset="['475','475','375','260']"
                  data-fontsize="['16','16','16','16']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['20','20','20','20']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                  data-style_hover="c:#fff;bg:#e2b13c;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-start="2000"
                  data-splitin="none"
                  data-splitout="none"
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                  data-responsive_offset="on"
                  data-responsive="off"
                  style="z-index: 9; font-family: 'Poppins', sans-serif; border: 1px solid rgba(255,255,255,0.51); padding: 13px 53px; letter-spacing: 0.975px; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">Continue
                </div>
                <div class="tp-caption WebProduct-Button rev-btn rs-parallaxlevel-0" id="slide-1-layer-4"
                  data-x="['left','left','left','center']" data-hoffset="['574','270','230','-110']"
                  data-y="['top','top','top','top']" data-voffset="['475','475','375','335']"
                  data-fontsize="['16','16','16','16']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['20','20','20','20']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                  data-style_hover="c:rgba(210, 150, 6, 1.00);bg:rgba(255, 255, 255, 1.00);"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-start="2000"
                  data-splitin="none"
                  data-splitout="none"
                  data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                  data-responsive_offset="on"
                  data-responsive="off"
                  style="z-index: 10; padding: 13px 53px; letter-spacing: 0.975px; font-family: 'Poppins', sans-serif; background-color: #e2b13c; white-space: nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">Explore
                </div> -->
              </li>
              <li data-transition="zoomout" data-slotamount="default" data-easein="easeInOut" data-easeout="easeInOut" data-masterspeed="2000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7">
                <img src="<?= base_url() ?>dist/frontend/images/slide_dua.png" alt="slider" data-bgparallax="3" data-bgposition="center center" data-duration="30000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0">
                <!-- <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 sub-title" id="slide-2-layer-1"
                  data-x="['left','left','center','center']" data-hoffset="['374','50','0','0']"
                  data-y="['top','top','top','top']" data-voffset="['245','245','145','55']"
                  data-fontsize="['48','48','48','24']"
                  data-fontweight="['600','600','600','600']"
                  data-lineheight="['56','56','56','26']"
                  data-width="['750','750','750','400']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[100%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05"
                  style="z-index: 2; word-wrap: break-word; max-width: 100%; color: #ffffff; padding: 0; letter-spacing: -0.96px; font-family: 'Poppins', sans-serif; text-transform: uppercase;">watch new <span style="color: #e2b13c;">all exhibitions</span> <br /> in <span style="color: #e2b13c;">max museum</span>
                </div>
                <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0 sub-title" id="slide-2-layer-2"
                  data-x="['left','left','center','center']" data-hoffset="['374','50','0','0']"
                  data-y="['top','top','top','top']" data-voffset="['370','370','270','120']"
                  data-fontsize="['18','18','18','18']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['24','24','24','24']"
                  data-width="['750','750','750','400']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[100%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05"
                  style="z-index: 2; white-space: normal; color:#ffffff; padding: 0; letter-spacing: 1.9px; font-family: 'PT Serif', serif; font-style: italic;">
                  A man is born he's a man of means. Then along come two they got nothin' but their <br /> jeans. But they got diff'rent strokes. It takes diff'rent strokes - it takes <br /> diff'rent strokes to move the world.
                </div>
                <div class="tp-caption NotGeneric-Button rev-btn  rs-parallaxlevel-0" id="slide-2-layer-3"
                  data-x="['left','left','left','center']" data-hoffset="['374','50','20','-100']"
                  data-y="['top','top','top','top']" data-voffset="['475','475','375','260']"
                  data-fontsize="['16','16','16','16']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['20','20','20','20']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                  data-style_hover="c:#fff;bg:#e2b13c;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-start="2000"
                  data-splitin="none"
                  data-splitout="none"
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
                  data-responsive_offset="on"
                  data-responsive="off"
                  style="z-index: 9; font-family: 'Poppins', sans-serif; border: 1px solid rgba(255,255,255,0.51); padding: 13px 53px; letter-spacing: 0.975px; white-space:nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">Continue
                </div>
                <div class="tp-caption WebProduct-Button rev-btn rs-parallaxlevel-0" id="slide-2-layer-4"
                  data-x="['left','left','left','center']" data-hoffset="['574','270','230','-110']"
                  data-y="['top','top','top','top']" data-voffset="['475','475','375','335']"
                  data-fontsize="['16','16','16','16']"
                  data-fontweight="['400','400','400','400']"
                  data-lineheight="['20','20','20','20']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;"
                  data-style_hover="c:rgba(210, 150, 6, 1.00);bg:rgba(255, 255, 255, 1.00);"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-start="2000"
                  data-splitin="none"
                  data-splitout="none"
                  data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                  data-responsive_offset="on"
                  data-responsive="off"
                  style="z-index: 10; padding: 13px 53px; letter-spacing: 0.975px; font-family: 'Poppins', sans-serif; background-color: #e2b13c; white-space: nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">Explore
                </div> -->
              </li>
            </ul>
          </div>
        </div>
        <div class="goto-next"><a href="#history-section"><i class="icon icon-Mouse bounce"></i></a></div>
      </div>
      <div id="history-section" class="container-fluid no-padding history-section">
        <div class="section-header">
          <h3>Sejarah<span> Selamat Datang di <span><?= @$identitas['company_name'] ?></span></span></h3>
        </div>
        <div class="col-md-6 no-padding img-block" data-image="<?= base_url() ?>dist/frontend/images/history-img.jpg">
          <img src="<?= base_url() ?>dist/frontend/images/history-img.jpg" alt="History" />
        </div>
        <div class="col-md-6 history-details">
          <div class="col-md-7 history-box">
            <h3>The Great Museum <br> Estimated by <span>Romans in 1961</span></h3>
            <p>Give us any chance well take it Give us any rule we'll break it. We're gonna make our dreams come true. They were four men living all together.</p>
            <ul>
              <li>
                <h4>March 1961</h4>
                <p>The establishment of our museum, with two professional tourist agents, in small office in Boston.</p>
              </li>
              <li>
                <h4>June 1998</h4>
                <p>Last of Americas deep space probes. If you have a problem if no one else can help and if you</p>
              </li>
              <li>
                <h4>May 2004</h4>
                <p>They were four men living all together yet they were all alone.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="purchase-section container-fluid no-padding">
        <div class="container">
          <div class="purchase-content">
            <h5>here comes the best museum theme ever!</h5>
            <p>These days are all Happy and Free. These days are all share them with me oh baby. Knight Rider: A shadowy flight into the dangerous world of a man who does not exist.</p>
            <a href="#" title="Purchase Theme" class="purchase">Purchase Theme</a>
            <a href="#" title="View Demos" class="purchase view">View Demos</a>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding venu-section">
        <div class="container">
          <div class="section-header">
            <h3>On View<span>About Our <span>VENUS</span></span></h3>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-1.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>War History</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-2.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Classical Art</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-3.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Gardens</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-4.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Arts of Asia</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-5.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Kings of History</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-6.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Vintage Arts</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-7.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Arts of Asia</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-8.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>German Arts</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-9.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>War History</h5>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 venu-box">
              <div class="venu-image-block">
                <img src="<?= base_url() ?>dist/frontend/images/venu-10.jpg" alt="venu" />
                <div class="venu-content">
                  <h5>Decorative Art</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding testimonial-section">
        <div class="container">
          <div class="section-header">
            <h3><b>testimonials</b><span>Our <span>visiters</span> Says</span></h3>
          </div>
          <div class="testimonial-carousel">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding testi-block">
              <div class="col-md-6 col-sm-6 col-xs-6 no-padding testi-img-block">
                <img src="<?= base_url() ?>dist/frontend/images/testi1.jpg" alt="Testimonial" />
                <i class="fa fa-quote-right"></i>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 testi-content">
                <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. </p>
                <h4>Loucine walker</h4>
                <span>Architect</span>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding testi-block">
              <div class="col-md-6 col-sm-6 col-xs-6 no-padding testi-img-block">
                <img src="<?= base_url() ?>dist/frontend/images/testi2.jpg" alt="Testimonial" />
                <i class="fa fa-quote-right"></i>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 testi-content">
                <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. </p>
                <h4>Prince jewels</h4>
                <span>Architect</span>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding testi-block">
              <div class="col-md-6 col-sm-6 col-xs-6 no-padding testi-img-block">
                <img src="<?= base_url() ?>dist/frontend/images/testi1.jpg" alt="Testimonial" />
                <i class="fa fa-quote-right"></i>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 testi-content">
                <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. </p>
                <h4>Loucine walker</h4>
                <span>Architect</span>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding testi-block">
              <div class="col-md-6 col-sm-6 col-xs-6 no-padding testi-img-block">
                <img src="<?= base_url() ?>dist/frontend/images/testi2.jpg" alt="Testimonial" />
                <i class="fa fa-quote-right"></i>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 testi-content">
                <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. </p>
                <h4>Prince jewels</h4>
                <span>Architect</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding event-section">
        <div class="container">
          <div class="section-header">
            <h3><b>Events</b><span>Up coming <span>exhibitions</span></span></h3>
          </div>
          <div class="row">
            <div class="col-md-11 col-sm-6 col-xs-6">
              <div class="events-block">
                <div class="event-content">
                  <div class="col-md-5 col-sm-12 col-xs-12 no-padding img-block">
                    <a href="#"><img src="<?= base_url() ?>dist/frontend/images/event-sec1.jpg" alt="Event" /></a>
                    <h6><i class="icon icon-Settings"></i> Workshop</h6>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12 events-content">
                    <div class="post-meta">
                      <div class="post-add"><i class="icon icon-Pointer"></i>California, USA<br /> Christian Central Museum</div>
                      <div class="post-date"><i class="icon icon-Time"></i> 27 July 2016 - 29 August 2016</div>
                    </div>
                    <h3>A New Classical Art for Christian Central Museum</h3>
                    <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. You wanna about no knows Your name. Why do we always come here? I guess well givup the know. . . .</p>
                    <div class="btn-block">
                      <a href="#" title="See more details">See more details <i class="fa fa-angle-right"></i></a>
                      <a href="#" title="Register now">Register now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-11 col-sm-6 col-xs-6">
              <div class="events-block">
                <div class="event-content">
                  <div class="col-md-5 col-sm-12 col-xs-12 no-padding img-block">
                    <a href="#"><img src="<?= base_url() ?>dist/frontend/images/event-sec2.jpg" alt="Event" /></a>
                    <h6><i class="icon icon-Eye"></i> Exhibition</h6>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12 events-content">
                    <div class="post-meta">
                      <div class="post-add"><i class="icon icon-Pointer"></i>California, USA<br /> Christian Central Museum</div>
                      <div class="post-date"><i class="icon icon-Time"></i> 27 June 2016 - 26 July 2016</div>
                    </div>
                    <h3>Great Fire of Christian Central Museum Family Walk</h3>
                    <p>That's just a little bit more than the law will allow. You wanna be where you can see our troubles are all the same. You wanna about no knows Your name. Why do we always come here? I guess well givup the know. . . .</p>
                    <div class="btn-block">
                      <a href="#" title="See more details">See more details <i class="fa fa-angle-right"></i></a>
                      <a href="#" title="Register now">Register now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid clients-section">
        <div class="container">
          <div class="clients-carousel">
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-1.png" alt="clients-1" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-2.png" alt="clients-2" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-3.png" alt="clients-3" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-4.png" alt="clients-4" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-5.png" alt="clients-5" /></a></div>

            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-1.png" alt="clients-1" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-2.png" alt="clients-2" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-3.png" alt="clients-3" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-4.png" alt="clients-4" /></a></div>
            <div class="col-md-12 item"><a href="#" title="client"><img src="<?= base_url() ?>dist/frontend/images/client-5.png" alt="clients-5" /></a></div>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding latest-blog-section">
        <div class="container">
          <div class="section-header">
            <h3><b>NEWS</b><span>Our Latest <span>NEWS</span></span></h3>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 latest-blog">
              <article class="type-post">
                <div class="entry-cover">
                  <a href="#"><img src="<?= base_url() ?>dist/frontend/images/latest-blog1.jpg" alt="Blog" /></a>
                </div>
                <div class="entry-header">
                  <div class="title-block">
                    <h3><a href="#" title="Enjoying the Classical Art">Enjoying the <span>Classical Art</span></a></h3>
                    <div class="author">
                      <span>by <a href="#" title="admin">admin</a></span>
                      <div class="category">
                        <a href="#" title="featured">featured</a>
                      </div>
                    </div>
                  </div>
                  <span class="post-date"><a href="#">15 <span>Sep</span></a></span>
                </div>
                <div class="entry-content">
                  <p>He busy revin' up his Powerful Mach 5. Said Californ is the place you ought to be So they loaded up the truck and moved to Beverly. </p>
                  <a href="#" class="btn" title="View More">View more <i class="fa fa-angle-right"></i></a>
                  <div class="entry-meta">
                    <span class="entry-comments"><i class="fa fa-comment-o"></i><a href="#">3 Comments</a></span>
                    <span class="entry-likes"><i class="fa fa-heart-o"></i><a href="#">15 Likes</a></span>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 latest-blog">
              <article class="type-post">
                <div class="entry-cover">
                  <a href="#"><img src="<?= base_url() ?>dist/frontend/images/latest-blog2.jpg" alt="Blog" /></a>
                </div>
                <div class="entry-header">
                  <div class="title-block">
                    <h3><a href="#" title="Imagination of the Paintings">Imagination of the <span>Paintings</span></a></h3>
                    <div class="author">
                      <span>by <a href="#" title="admin">admin</a></span>
                      <div class="category">
                        <a href="#" title="featured">featured</a>
                      </div>
                    </div>
                  </div>
                  <span class="post-date"><a href="#">18 <span>Jun</span></a></span>
                </div>
                <div class="entry-content">
                  <p>He busy revin' up his Powerful Mach 5. Said Californ is the place you ought to be So they loaded up the truck and moved to Beverly. </p>
                  <a href="#" class="btn" title="View More">View more <i class="fa fa-angle-right"></i></a>
                  <div class="entry-meta">
                    <span class="entry-comments"><i class="fa fa-comment-o"></i><a href="#">6 Comments</a></span>
                    <span class="entry-likes"><i class="fa fa-heart-o"></i><a href="#">55 Likes</a></span>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 latest-blog">
              <article class="type-post">
                <div class="entry-cover">
                  <a href="#"><img src="<?= base_url() ?>dist/frontend/images/latest-blog3.jpg" alt="Blog" /></a>
                </div>
                <div class="entry-header">
                  <div class="title-block">
                    <h3><a href="#" title="Roman fort gate tours">Roman fort gate <span>tours</span></a></h3>
                    <div class="author">
                      <span>by <a href="#" title="admin">admin</a></span>
                      <div class="category">
                        <a href="#" title="featured">featured</a>
                      </div>
                    </div>
                  </div>
                  <span class="post-date"><a href="#">25 <span>Aug</span></a></span>
                </div>
                <div class="entry-content">
                  <p>He busy revin' up his Powerful Mach 5. Said Californ is the place you ought to be So they loaded up the truck and moved to Beverly. </p>
                  <a href="#" class="btn" title="View More">View more <i class="fa fa-angle-right"></i></a>
                  <div class="entry-meta">
                    <span class="entry-comments"><i class="fa fa-comment-o"></i><a href="#">5 Comments</a></span>
                    <span class="entry-likes"><i class="fa fa-heart-o"></i><a href="#">17 Likes</a></span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid no-padding gallery-section">
        <div class="section-header">
          <h3><b>GALLERY</b><span>Our Great <span>FLOWS</span></span></h3>
        </div>
        <div class="gallery-category">
          <ul id="filters">
            <li><a data-filter="*" class="active" href="#" title="All">All</a></li>
            <li><a data-filter=".modern" href="#" title="Modern art">modern art</a></li>
            <li><a data-filter=".vintage" href="#" title="Vintage art">vintage art </a></li>
            <li><a data-filter=".statue" href="#" title="Ancient statue">ancient statue</a></li>
            <li><a data-filter=".others" href="#" title="Others">Others</a></li>
          </ul>
        </div>
        <div class="gallery-list gallery-fitrow">
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding modern others">
            <img src="<?= base_url() ?>dist/frontend/images/gallery1.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="<?= base_url() ?>dist/frontend/images/gallery1.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding vintage statue">
            <img src="<?= base_url() ?>dist/frontend/images/gallery2.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="<?= base_url() ?>dist/frontend/images/gallery2.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding statue">
            <img src="<?= base_url() ?>dist/frontend/images/gallery3.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="images/gallery3.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding others">
            <img src="<?= base_url() ?>dist/frontend/images/gallery4.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="<?= base_url() ?>dist/frontend/images/gallery4.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding vintage">
            <img src="<?= base_url() ?>dist/frontend/images/gallery5.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="<?= base_url() ?>dist/frontend/images/gallery5.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
          <div class="gallery-box col-md-4 col-sm-4 col-xs-6 no-padding modern">
            <img src="<?= base_url() ?>dist/frontend/images/gallery6.jpg" alt="Gallery" />
            <div class="gallery-content">
              <h3>Classical Art</h3>
              <img src="<?= base_url() ?>dist/frontend/images/gallery-title-seprator.png" alt="Arrow" />
              <span>
                <a href="#" title="Link"><i class="icon icon-Linked"></i></a>
                <a class="zoom" href="<?= base_url() ?>dist/frontend/images/gallery6.jpg" title="zoom"><i class="icon icon-Search"></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer-main container-fluid no-padding">
      <div class="container-fluid no-padding visit-block">
        <div class="container">
          <h5>Planning to visit our museum? Look at the timetable for the upcoming exhibitions</h5>
        </div>
      </div>
      <div class="container-fluid no-padding footer-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 widget-block">
              <div class="ftr-widget ftr_widget_about">
                <a href="#"><img src="<?= base_url() ?>dist/frontend/images/logo.jpg" style="height:60px;" alt="Logo" /></a>
                <p><?= @$identitas['description'] ?></p>
                <div class="ftr-cnt-detail">
                  <p><i class="icon icon-Pointer"></i> <?= @$identitas['address'] ?></p>
                  <p><i class="icon icon-Phone"></i> <a href="tel:+<?= @$identitas['phone'] ?>" title="+<?= @$identitas['phone'] ?>"><?= @$identitas['phone'] ?></a></p>
                  <p><i class="icon icon-Mail"></i> <a href="mailto:<?= @$identitas['email'] ?>" title="<?= @$identitas['email'] ?>"><?= @$identitas['email'] ?></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 widget-block">
              <div class="ftr-widget ftr_widget_newsletter">
                <ul>
                  <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 widget-block">
              <div class="ftr-widget ftr_recent_widget">
                <!-- <h3 class="widget-title">Recent events</h3>
                <div class="recent-box">
                  <a href="#"><img src="<?= base_url() ?>dist/frontend/images/recent-box.jpg" alt="Recent Box" /></a>
                  <h3><a href="#" title="Integer at diam gravida fringilla Nibh preti purus">Integer at diam gravida fringilla Nibh preti purus</a></h3>
                  <p><i class="icon icon-Time"></i>27 June 2016 - 26 July 2016</p>
                </div>
                <div class="recent-box">
                  <a href="#"><img src="<?= base_url() ?>dist/frontend/images/recent-box2.jpg" alt="Recent Box" /></a>
                  <h3><a href="#" title="Integer at diam gravida fringilla Nibh preti purus">Integer at diam gravida fringilla Nibh preti purus</a></h3>
                  <p><i class="icon icon-Time"></i>28 May 2016 - 29 December 2016</p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid no-padding btm-ftr">
          <p><i class="fa fa-copyright"></i> <?= date('Y') ?> Diorama Arsip Jogja. All Rights Reserved</p>
        </div>
      </div>
    </footer>
  </div>
  <script src="<?= base_url() ?>dist/frontend/js/jquery-1.12.4.min.js"></script>
  <script src="<?= base_url() ?>dist/frontend/libraries/lib.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>dist/frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script src="<?= base_url() ?>dist/frontend/js/functions.js"></script>
</body>

</html>