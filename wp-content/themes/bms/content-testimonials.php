<?php
/**
 * The template used for displaying page content in page-about.php
 *
 * @package bms
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	</header><!-- .entry-header -->

	<div class="entry-content span-twelve">
		<?php
		$test = array( 
			'post_type'			=> 'testimonials', 
			'posts_per_page'	=> 6
		);

		$loop = new WP_Query( $test );

		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<blockquote>';
				the_content();
				echo '<cite>';
				echo rwmb_meta( 'rw_author' );
					echo '<span>';
    					echo rwmb_meta( 'rw_job' );
					echo '</span>';
				echo '</cite>';
			echo '</blockquote>';
		endwhile;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer span-twelve">
		<?php edit_post_link( __( 'Edit', 'bms' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
