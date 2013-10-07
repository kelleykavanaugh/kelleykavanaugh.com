      <?php get_header(); ?>
                  <div class="circle page1"></div>
        <div class="row-fluid">
          <div class="span12">
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <center><h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></center>
          <p class="pull-left"><?php the_time('F jS, Y') ?></p>
          <p class="pull-right">Post By: <?php the_author_posts_link() ?></p>
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