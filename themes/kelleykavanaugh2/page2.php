    <?php /* Template Name: Page 2 */ get_header(); ?>
      <div class="circle coin"><i class="icon-keyboard"></i><h1 class="title"><?php the_title(); ?></h1></div>
        <div class="row-fluid">
          <div class="span12">
            <div class="border-bottom">
            </div><!--/border-bottom-->
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="border-bottom">
              <div id="block-text">
                <?php the_content() ?>
              </div><!--/block-text-->
            </div><!--/border-bottom-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->

          <!-- Start The Loop -->
          <?php query_posts( 'cat=2' ); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="border-bottom">
              <div id="posts">
                <?php the_content() ?>
              </div><!--/posts-->
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