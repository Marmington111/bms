<?php
/**
 * Template Name: Services Page
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

			<?php
			$services = array( 
				'post_type'			=> 'services', 
				'posts_per_page'	=> 9
			);

			$loop = new WP_Query( $services );

			echo '<div class="service-wrap span-twelve clearfix">';
			while ( $loop->have_posts() ) : $loop->the_post();
	        	
				echo '<div class="a-service span-four">';
					echo '<div class="service-thumb">';
						the_post_thumbnail();
					echo '</div>';// service-thumb
					echo '<div class="service-content">';
						echo '<h2 class="service-title">';
							the_title();
						echo '</h2>';// service-title
						echo '<div class="service-blurb">';
							the_content();
						echo '</div>';// servic-blurb
					echo '</div>';// service-content
				echo '</div>';// a-service
			endwhile;
			echo '</div>';// service-wrap
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- inner-wrap -->

<?php get_footer(); ?>
