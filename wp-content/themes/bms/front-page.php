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
        		<div class="inner-wrap clearfix">
        	
        		<div class="wu-image span-eight">
        			
        		</div><!--  -->
	        		<div class="wu-content span-four">
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
        		</div><!-- inner-wrap -->
        	</section>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
