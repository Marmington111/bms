<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bms
 */

get_header(); ?>

	<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        	<section class="site-intro">
        		<div class="inner-wrap">
	           		<?php get_sidebar( 'intro' ); ?>

	           		<!-- <h1 class="section-title star">
	           			<span>
		           			The First of its Kind

		           			<i></i>
	           			</span>
	           		</h1>

	           		<h2 class="section-content">
	           			A revolutionary approach to <strong><em>injury rehabilitation</em></strong>. The nervous system is amazingly plastic and adaptable. More <strong><em>efficient movement patterns</em></strong> are the key to <strong><em>enjoying</em></strong> your favorite activities, sports, and <strong><em>life</em></strong>.
	           		</h2> -->
           		</div><!-- inner-wrap -->

	        	<div class="triangle"></div><!-- triangle -->
        	</section><!-- site-intro -->


        	<section class="intro-icons-wrap">
	        	<div class="inner-wrap clearfix">
	        		<?php get_sidebar( 'icon' ); ?>
	        	</div><!-- inner-wrap -->
        	</section><!-- intro-icons-wrap -->

        	<section class="write-up">
        		<div class="inner-wrap">

					<?php
					$high = array( 
						'post_type'			=> 'highlights', 
						'posts_per_page'	=> 3
					);

					$loop = new WP_Query( $high );

					while ( $loop->have_posts() ) : $loop->the_post();
			        	echo '<div class="write-up-wrap clearfix">';
							echo '<div class="wu-image span-seven">';
							the_post_thumbnail();
							echo '</div>';

						echo '<div class="wu-content span-five">';
							echo '<h2 class="wu-title">';
							the_title();
							echo '</h2>';
							the_content();
							echo '<h3 class="wu-highlights">highlights</h3>';

							$highs = rwmb_meta( 'rw_hitem', 'type=text' );
							echo '<ul>';
							foreach ( $highs as $high )
							{
								echo "<li>{$high}</li>";
							}
							echo '</ul>';
						echo '</div>';
					echo '</div>';
					endwhile;
					?>

        		</div><!-- inner-wrap -->
        	</section><!-- write-up -->

        	<section class="cta">
	        	<div class="inner-wrap">
	        		<?php get_sidebar( 'cta' ); ?>
	        		<!-- <p><strong><em>Brian’s movement coaching</em></strong> can help you correct <strong><em>any</em></strong> physical difficulties you are having!</p> -->
	        	</div>
        	</section>

        	<section class="testimonials">
	        	<div class="inner-wrap">
	        		<?php
	        		$test = array( 
	        			'post_type'			=> 'testimonials', 
	        			'posts_per_page'	=> 6
	        		);

	        		$loop = new WP_Query( $test );

	        		echo '<div class="flexslider"><ul class="slides">';
	        		while ( $loop->have_posts() ) : $loop->the_post();
	        			echo '<li><blockquote>';
	        				echo rwmb_meta( 'rw_excerpt' );
	        				echo '<cite>';
	        				echo rwmb_meta( 'rw_author' );
	        					echo '<span>';
		        					echo rwmb_meta( 'rw_job' );
	        					echo '</span>';
	        				echo '</cite>';
	        			echo '</blockquote></li>';
	        		endwhile;
	        		echo '</ul></div>';
	        		?>
	        	</div><!-- inner-wrap -->
        	</section><!-- testimonials -->
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
