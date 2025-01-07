<footer class="footer-main container-fluid no-padding">

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
      <p><i class="fa fa-copyright"></i> <?= @$identitas['start_year'] ?> Versi <?= @$identitas['version'] ?> <?= @$identitas['app_name'] ?>. All Rights Reserved</p>
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