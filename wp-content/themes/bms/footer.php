<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bms
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://bodymovementsolutions.com/', 'bms' ) ); ?>"><?php printf( __( '&copy; 2015. Body Movement Solutions. All Rights Reserved.', 'bms' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: Movement by %2$s.', 'bms' ), 'bms', '<a href="http://www.marmington.com" rel="designer">Matthew Armington</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
