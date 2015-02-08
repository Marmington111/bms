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
		$args = array( 
			'post_type'			=> 'bio', 
			'post_status'		=> 'publish',
		);

		$bio = new WP_Query( $args );
		if ( $bio->have_posts() ) {
	?>		
	    <div class="bio-header clearfix">
		    <div class="bio-pic">
			    <?php the_post_thumbnail('bio-thumb'); ?>
		    </div>

		    <div class="bio-intro">
			    <div class="bio-name">
				    <?php the_title(); ?>
			    </div>'
			    <div class="bio-blurb">
				    <?php the_content(); ?>
			    </div>
			    <p class="bio-cat"><i class="fa fa-star"></i><span>Position:</span>
				    <?php echo rwmb_meta( 'rw_position' ); ?>
			    </p>
			    <p class="bio-cat"><i class="fa fa-university"></i><span>Experience:</span> 
				    <?php echo rwmb_meta( 'rw_experience' ); ?>
			    </p>
			    <p class="bio-cat"><i class="fa fa-thumbs-up"></i><span>Qualifications:</span>
				    <?php echo rwmb_meta( 'rw_qualify' ); ?>
			    </p>
		    </div>
		</div>
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
<?php } ?>
