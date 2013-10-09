    <?php /* Template Name: Page 3 */ get_header(); ?>
      <div class="circle icon"><i class="icon-suitcase"></i><h1 class="title"><?php the_title(); ?></h1></div>
        <div class="row-fluid">
          <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts( 'cat=3' ); ?>
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