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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'contact' ); ?>
</div><!-- inner-wrap -->

<?php get_footer(); ?>
