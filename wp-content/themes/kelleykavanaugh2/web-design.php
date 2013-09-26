    <?php /* Template Name: Web Design */ get_header(); ?>
        <div class="row-fluid">
          <div class="span12">
          <!-- Start The Loop -->
          <center><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></center>
                    <?php query_posts($query_string . '&cat=2'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <p class="pull-right"><?php the_time('F jS, Y') ?></p>
            <div class="border-bottom">
              <?php the_content() ?>
              <div class="pull-right">
                <small><em><?php the_tags('Tags: ', ', ', '<br />'); ?></em></small>
              </div><!--/pull-right-->
            </div><!--/pull-left border-bottom-->
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <!-- End the Loop -->
          <!--Start nav-->
          <div class="pull-left">
          <?php previous_posts_link( 'Newer Episodes' ); ?>
          </div><!--/pull-left-->
          <div class="pull-right">
          <?php next_posts_link( 'Older Episodes' , $max_pages ); ?>
          </div><!--/pull-right-->
          <!--/ nav-->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>