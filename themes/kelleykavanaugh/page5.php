<?php
/*
Template Name: 05 Creative Work
*/

get_header(); ?>
	<div id="column-top"><div id="frame-long"></div></div>
	<div id="content">
		<!-- Get one Category -->
			<?php query_posts('cat=6'); ?>
		<!-- Start the Loop. -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Get the Title-->
			<h2><?php the_title(); ?></h2>
		<!-- Post Content -->
		        <div class="post">
			<?php the_content(); ?>
			</div>
		<!-- Stop The Loop -->
			<?php endwhile; else: ?>
		<!-- No Posts Text -->
			<p>Sorry, no posts matched your criteria.</p>
		<!-- REALLY stop The Loop. -->
			<?php endif; ?>
		<!-- End One Category -->
			<?php wp_reset_query(); ?>
	</div><!--End Content/Column-->
<?php get_footer(); ?>
