<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="banner-splash">
    </div> <!--/banner-->
      <div class="container-splash">
            <?php /* Template Name: splash */ ?>
<!-- HEADER END -->
        <div class="row-fluid">
          <div class="span4">
            <a class="circle page2 splash" href="./web-design"></a>
          </div><!--/span -->
          <div class="span4">
            <a class="circle page1 splash" href="./home"></a>
          </div><!--/span -->
          <div class="span4">
            <a class="circle page3 splash" href="./costumes"></a>
          </div><!--/span -->
        </div><!--/row -->
        <div class="row-fluid">
          <div class="span2 offset2">
            <a class="circle page4 splash" href="./management"></a>
          </div><!--/span -->
          <div class="span2 offset2">
            <a class="circle page5 splash" href="./crafts"></a>
          </div><!--/span -->
          <div class="span2 offset2">
            <a class="circle page6 splash" href="./contact"></a>
          </div><!--/span -->
        </div><!--/row -->
<!-- FOOTER -->
            <div class="footer-splash">
                <footer>
                <div class="pull-left">
                    <small><em><strong><a href="http://wordpress.org/">Wordpress</a></strong> Theme by <strong><a href="http://www.kelleykavanaugh.com/">Kelley Kavanaugh</a></strong>
                </div><!--/. pull-left-->
                <div class="pull-right">
                    <small><em>&copy; 2013 <strong><?php bloginfo('name'); ?></div></strong></em></small>
                </div><!--/ .pull-right -->
                </footer>
            </div><!--/footer-splash-->
          </div><!--/container-splash-->
        <?php wp_footer(); ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    </body>
</html>