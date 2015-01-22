<?php
/**
 * Footer widgets
 *
 */

if ( ! is_active_sidebar( 'intro-blurb' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="intro-blurb-widget" class="intro-blurb-widgets clearfix" role="complementary">
		<?php dynamic_sidebar( 'intro-blurb' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->