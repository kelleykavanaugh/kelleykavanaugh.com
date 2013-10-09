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
    <!-- font awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- /font awesome -->
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
            <a class="circle icon splash" href="./websites"><i class="icon-keyboard"></i><div class="title">websites</div></a>
          </div><!--/span -->
          <div class="span4">
            <a class="circle icon splash" href="./about"><i class="icon-heart-empty"></i><div class="title">about</div></a>
          </div><!--/span -->
          <div class="span4">
            <a class="circle icon splash" href="./costumes"><i class="icon-suitcase"></i><div class="title">costumes</div></a>
          </div><!--/span -->
        </div><!--/row -->
        <div class="row-fluid">
          <div class="span2 offset2">
            <a class="circle icon splash" href="./projects"><i class="icon-gears"></i><div class="title">projects</div></a>
          </div><!--/span -->
          <div class="span2 offset2">
            <a class="circle icon splash" href="./crafts"><i class="icon-cut"></i><div class="title">crafts</div></a>
          </div><!--/span -->
          <div class="span2 offset2">
            <a class="circle icon splash" href="./contact"><i class="icon-inbox"></i><div class="title">contact</div></a>
          </div><!--/span -->
        </div><!--/row -->
      </div><!--/container-splash-->
    <?php get_footer(); ?>