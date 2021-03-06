<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package bms
 */

get_header(); ?>
<div class="inner-wrap clearfix">
	<div id="primary" class="content-area span-twelve clearfix">
		<main id="main" class="site-main clearfix" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1><?php _e( 'Sorry! That page can&rsquo;t be found.', 'bms' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'The page you were looking for appears to have been moved, deleted or does not exist. Maybe try one of the links below, a search, or return to the <a href="http://www.bodymovementsolutions.com"><strong style="color:#2C86BA; text-decoration:underline;">home</strong></a> page. We apologize for the inconvenience', 'bms' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( bms_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'bms' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'bms' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- inner-wrap -->
<?php get_footer(); ?>
