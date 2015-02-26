<?php
/**
 * Template Name: Testimonials
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap">
	<div id="primary" class="content-area span-eight clearfix">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'testimonials' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_sidebar(); ?>
</div><!-- inner-wrap -->

<?php get_footer(); ?>
