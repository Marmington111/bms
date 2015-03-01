<?php
/**
 * Template Name: Blog
 *
 * @package bms
 */

get_header(); ?>

<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-eight">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_sidebar(); ?>
</div><!-- inner-wrap -->

<?php get_footer(); ?>
