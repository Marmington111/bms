<?php
/**
 * Template Name: Internal Page
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-twelve clearfix">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- inner-wrap -->

<?php get_footer(); ?>
