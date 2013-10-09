    <?php /* Template Name: Page 6 */ get_header(); ?>
      <div class="circle icon"><i class="icon-inbox"></i><h1 class="title"><?php the_title(); ?></h1></div>
        <div class="row-fluid">
          <div class="span12">
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