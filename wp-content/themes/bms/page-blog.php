<?php
/**
 * Template Name: Blog
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-eight clearfix">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php bms_entry_comment(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php get_sidebar(); ?>
</div><!-- inner-wrap -->

<?php get_footer(); ?>
