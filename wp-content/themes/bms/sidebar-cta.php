<?php
/**
 * Footer widgets
 *
 */

if ( ! is_active_sidebar( 'cta' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="cta-widget" class="cta-widget" role="complementary">
		<?php dynamic_sidebar( 'cta' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->