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
    <?php /* Template Name: splash */ ?>
<!-- HEADER END -->
      <div class="banner-splash">
      </div> <!--/banner-->
      <div class="container-splash">
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
      </div><!--/container-splash-->
    <?php get_footer(); ?>