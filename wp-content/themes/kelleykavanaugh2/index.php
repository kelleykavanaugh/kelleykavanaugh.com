    <?php get_header(); ?>
      <div class="circle page1"></div>
        <div class="row-fluid">
          <div class="span12">
          <div class="border-bottom">
          <h1><?php the_title(); ?></h1>
          </div><!--/border-bottom-->
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="border-bottom">
              <?php the_content() ?>
            </div><!--/border-bottom-->
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>