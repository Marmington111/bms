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
		        	<div class="write-up-wrap clearfix">
		        		<div class="wu-image span-seven ">
		        			<img class="span-twelve" src="http://localhost:8888/body_movement_solutions/wp-content/uploads/2015/01/bad-joint1.png"/>
		        		</div><!-- write-up-wrap -->

		        		<div class="wu-content span-five">
							<h2 class="wu-title">Lack of Quality Movement</h2>

			        		<p>You are done. Fired. Do not show your face at the laundry again. Stay away from Pinkman. Do not go near him. Ever. Are you listening to me?</p>
			        		
			        		<h3 class="wu-highlights">hightlights</h3>

			        		<ul>
				        		<li>Poor or worsening posture</li>
				        		<li>Wear and tear of tissues</li>
				        		<li>Weakening of tissues and muscles</li>
				        		<li>Joint stiffness or inflammation</li>
				        		<li>General weakness and fatigue</li>
				        		<li>Coordination deficits</li>
				        		<li>Poor performance</li>
				        		<li>Pain</li>
			        		</ul>
		        		</div><!-- wu-content -->
		        	</div><!-- write-up-wrap -->

		        	<div class="write-up-wrap clearfix">
		        		<div class="wu-image span-seven">
		        			<img class="span-twelve" src="http://localhost:8888/body_movement_solutions/wp-content/uploads/2015/01/healthy-joint2.png"/>
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
	        				echo get_post_meta( $post->ID, "bms_cite", true );
	        					echo '<span>';
		        					echo get_post_meta( $post->ID, "bms_cite", true );
	        					echo '</span>';
	        				echo '</cite>';
	        			echo '</blockquote></li>';
	        		endwhile;
	        		echo '</ul></div>';
	        		?>
	        		
	        		<div class="flexslider">
	        				<ul class="slides">
	        					<li>
	        						<blockquote>
	        							<p>Brian’s movement coaching can help you correct any physical difficulties you are having which are limiting or preventing your activities.</p>

	        							<cite>Henri T. <span>Otolaryngologist Head and Neck Surgeon</span></cite>
	        						</blockquote>
	        					</li>

	        					<li>
	        						<blockquote>
	        							<p>Within 2 months my mom made tremendous progress with her mobility and her overall well-being.</p>

	        							<cite>Henri T. <span>Otolaryngologist Head and Neck Surgeon</span></cite>
	        						</blockquote>
	        					</li>

	        					<li>
	        						<blockquote>
	        							<p>Since training with Brian, I have actually just now begun to understand how my body is supposed to move in a more efficient manner, so that I can move more freely, whether in Martial Arts, or everyday movement, such as walking down the street!</p>

	        							<cite>Henri T. <span>Otolaryngologist Head and Neck Surgeon</span></cite>
	        						</blockquote>
	        					</li>
	        				</ul>
	        		</div><!-- flexslider -->
	        	</div><!-- inner-wrap -->
        	</section><!-- testimonials -->
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
