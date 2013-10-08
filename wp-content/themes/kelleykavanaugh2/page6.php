    <?php /* Template Name: Page 6 */ get_header(); ?>
      <div class="circle page6"></div>
        <div class="row-fluid">
          <div class="span12">
          <div class="border-bottom">
          <h1><?php the_title(); ?></h1>
          </div><!--/border-bottom-->
          <!-- Start The Loop -->
          <?php query_posts( 'cat=6' ); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="border-bottom">
              <?php the_content() ?>
            </div><!--/border-bottom-->
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <!-- End the Loop -->
          <!--Start nav-->
          <div class="pull-left">
          <?php previous_posts_link( 'Newer' ); ?>
          </div><!--/pull-left-->
          <div class="pull-right">
          <?php next_posts_link( 'Older' , $max_pages ); ?>
          </div><!--/pull-right-->
          <!--/ nav-->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>