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
		        	<div class="intro-icon span-four">
		        		<i class="fa fa-bolt"></i>
		        		<h1 class="icon-title">Dynamic Joint Mobility</h1><!-- icon-title -->
		        		<p class="icon-content">Movement templates designed to restore full range of motion to every joint in the body.</p><!-- icon-content -->
		        	</div><!-- intro-icon -->

		        	<div class="intro-icon span-four">
		        		<i class="fa fa-cogs"></i>
		        		<h1 class="icon-title">Injury Rehabilitation</h1><!-- icon-title -->
		        		<p class="icon-content">Heal existing injuries, correct poor posture, promote proper habits. Coordination and control will help eliminate pain.</p><!-- icon-content -->
		        	</div><!-- intro-icon -->

		        	<div class="intro-icon span-four">
		        		<i class="fa fa-graduation-cap"></i>
		        		<h1 class="icon-title">Neural Re-Education</h1><!-- icon-title -->
		        		<p class="icon-content">The brain is the key to re-training the body’s movement patterns.</p><!-- icon-content -->
		        	</div><!-- intro-icon -->
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

		        	echo '<div class="write-up-wrap clearfix">';
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div class="wu-image span-seven">';
							
						echo '</div>';
						echo '<div class="wu-content span-five">';
							echo '<h2 class="wu-title">';
							the_title();
							echo '</h2>';
							the_content();
							echo '<h3 class="wu-highlights">highlights</h3>';

							$highlights = rwmb_meta( 'rw_highlight_item' );
							$content = '<ul>';
							foreach ( $highlights as $highlight )
							{
								$content .= sprintf(
									'<li>%s</li>',
									$highlight->name
								);
							}

							$content .= '</ul>';
							echo $content;
						echo '</div>';
					endwhile;
					echo '</div>';
					?>

		        	<div class="write-up-wrap clearfix">
		        		<div class="wu-image span-seven">
		        			<img class="span-twelve" src="http://localhost:8888/body_movement_solutions/wp-content/uploads/2015/01/neuro1.png"/>
		        		</div><!-- wu-image -->

		        		<div class="wu-content span-five">
							<h2 class="wu-title">Nervous System</h2>

			        		<p>You are done. Fired. Do not show your face at the laundry again. Stay away from Pinkman. Do not go near him. Ever. Are you listening to me?</p>
			        		
			        		<h3 class="wu-highlights">hightlights</h3>

			        		<ul>
				        		<li>Increased joint range of motion</li>
				        		<li>Improved motion coordination and strength</li>
				        		<li>Enhanced joint lubrication</li>
				        		<li>Improved body awareness, coordination, and agility</li>
				        		<li>Increased connective tissue strength</li>
				        		<li>Enhanced proprioception and injury resistance</li>
				        		<li>Dramatic postural improvement</li>
				        		<li>Increased strength and athletic movement skill</li>
				        		<li>Mental sharpness</li>
			        		</ul>
		        		</div><!-- wu-content -->
		        	</div><!-- write-up-wrap -->

		        	<div class="write-up-wrap clearfix">
		        		<div class="wu-image span-seven">
		        			<img class="span-twelve" src="http://localhost:8888/body_movement_solutions/wp-content/uploads/2015/01/healthy-joint3.png"/>
		        		</div><!-- wu-image -->

		        		<div class="wu-content span-five">
							<h2 class="wu-title">Moving accurately</h2>

			        		<p>You are done. Fired. Do not show your face at the laundry again. Stay away from Pinkman. Do not go near him. Ever. Are you listening to me?</p>
			        		
			        		<h3 class="wu-highlights">hightlights</h3>

			        		<ul>
				        		<li>Increased joint range of motion</li>
				        		<li>Improved motion coordination and strength</li>
				        		<li>Enhanced joint lubrication</li>
				        		<li>Improved body awareness, coordination, and agility</li>
				        		<li>Increased connective tissue strength</li>
				        		<li>Enhanced proprioception and injury resistance</li>
				        		<li>Dramatic postural improvement</li>
				        		<li>Increased strength and athletic movement skill</li>
				        		<li>Mental sharpness</li>
			        		</ul>
		        		</div><!-- wu-content -->
		        	</div><!-- write-up-wrap -->
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
	        			'posts_per_page'	=> 5
	        		);

	        		$loop = new WP_Query( $test );

	        		echo '<div class="flexslider"><ul class="slides">';
	        		while ( $loop->have_posts() ) : $loop->the_post();
	        			echo '<li><blockquote>';
	        				the_content();
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
