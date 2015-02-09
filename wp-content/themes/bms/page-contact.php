<?php
/**
 * Template Name: Contact Page
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-eight clearfix">
		<main id="main" class="site-main" role="main">
			<h2 class="widget-title">Get in Touch</h2>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'contact' ); ?>
</div><!-- inner-wrap -->

<?php get_footer(); ?>
