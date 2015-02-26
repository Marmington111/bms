<?php
/**
 * Intro widgets
 *
 */

if ( ! is_active_sidebar( 'intro-icons' ) ) {
	return;
}
?>


<div id="intro-icon-widget" class="intro-icon-widgets clearfix" role="complementary">
	<?php dynamic_sidebar( 'intro-icons' ); ?>
</div><!-- #footer-sidebar -->
