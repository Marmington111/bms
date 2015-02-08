<?php
/**
 * Template Name: About Me
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-twelve clearfix">
		<main id="main" class="site-main" role="main">
			<?php
			$biography = array( 
				'post_type'			=> 'bio', 
				'posts_per_page'	=> 1
			);

			$loop = new WP_Query( $biography );

			while ( $loop->have_posts() ) : $loop->the_post();
	        	echo '<div class="bio-header clearfix">';
					echo '<div class="bio-pic">';
						the_post_thumbnail('bio-thumb');
					echo '</div>';// bio-pic
					echo '<div class="bio-intro">';
						echo '<div class="bio-name">';
							the_title();
						echo '</div>';// bio-name
						echo '<div class="bio-blurb">';
							the_content();
						echo '</div>';// bio-blurb
						echo '<p class="bio-cat"><i class="fa fa-star"></i><span>Position: </span>';
							echo rwmb_meta( 'rw_position' );
						echo '</p>';
						echo '<p class="bio-cat"><i class="fa fa-university"></i><span>Position: </span>';
							echo rwmb_meta( 'rw_experience' );
						echo '</p>';
						echo '<p class="bio-cat"><i class="fa fa-thumbs-up"></i><span>Position: </span>';
							echo rwmb_meta( 'rw_qualify' );
						echo '</p>';
					echo '</div>';// bio-intro
				echo '</div>';// bio-header
			endwhile;
			?>	

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'about' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- inner-wrap -->

<?php get_footer(); ?>
