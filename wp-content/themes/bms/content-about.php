<?php
/**
 * The template used for displaying page content in page-about.php
 *
 * @package bms
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if (has_post_thumbnail()) {
			    echo '<div class="bio-header clearfix">';
				    echo '<div class="bio-pic">';
					    echo the_post_thumbnail('index-thumb');
				    echo '</div>';
				    echo '<div class="bio-intro">';
					    echo '<div class="bio-name">Brian Muccio</div>';
					    echo '<div class="bio-blurb">Motherfucker do that shit to me, he better paralyze my ass, ’cause I’ll kill the motherfucker, know what I’m sayin’? You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out.</div>';
					    echo '<p class="bio-cat"><i class="fa fa-star"></i><span>Position:</span> Owner/Trianer</p>';
					    echo '<p class="bio-cat"><i class="fa fa-university"></i><span>Experience:</span> Over 10 years</p>';
					    echo '<p class="bio-cat"><i class="fa fa-thumbs-up"></i><span>Qualifications:</span> Master of movement</p>';
				    echo '</div>';
				echo '</div>';
			}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content span-twelve">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bms' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer span-twelve">
		<?php edit_post_link( __( 'Edit', 'bms' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
