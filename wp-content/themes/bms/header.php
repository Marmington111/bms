 <?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bms
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bms' ); ?></a>

	<header id="masthead" class="site-header clearfix" role="banner">
		<div class="top-bar span-twelve">
            <div class="inner-wrap clearfix">
                <div class="contact-info">
                    <ul class="clearfix">
                        <li><i class="fa fa-phone">:</i>(617) 290-4512</li>
                        <li><i class="fa fa-envelope">:</i>brian@bodymovementsolutions.com</li>
                    </ul>
                </div><!-- contact-info -->

                <?php bms_social_menu(); ?>
	        </div><!-- inner-wrap -->
	    </div><!-- top-bar -->

			<?php if ( get_header_image() && ( 'blank' == get_header_textcolor() ) ) : ?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
					</a>
				</div><!-- header-image -->
			<?php endif; // End header image check. ?>

			<?php 
			    if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
			        echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
			    } else {
			        echo '<div class="site-branding">';
			    }
			?>
				<div class="title-box">
					<?php if ( get_theme_mod( 'img-upload' ) ) : ?>
					    <div class='site-logo' style="width=200px">
					        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'img-upload' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					    </div>
					<?php endif; ?>

					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

				</div><!-- title-box -->
			</div><!-- .site-branding -->
	

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="inner-wrap clearfix">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'bms' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

					<div class="search-toggle">
					    <i class="fa fa-search"></i>
					    <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'my-simone' ); ?></a>
					</div>
				</div><!-- inner-wrap -->
			</nav><!-- #site-navigation -->
			<div id="search-container" class="search-box-wrapper clear">
				    <div class="search-box clear">
				<div class="inner-wrap">
				        <?php get_search_form(); ?>
				</div><!-- inner-wrap -->
				    </div>
			</div> 

	</header><!-- #masthead -->

	<div id="content" class="site-content">
	
	<?php if ( ! is_front_page() && ! is_search() ) { ?>
        <div class="page-title">
            <div class="inner-wrap clearfix">
                <h2 class="title"><?php echo get_the_title(); ?></h2>
                <p class="breadcrumbs">
                    <a href="index.html">Home</a><i class="fa fa-angle-right"></i><strong>Locations</strong>
                </p>
            </div>
        </div>
    <?php } ?>
    <?php if ( is_search() ) {?>
    <div class="page-title">
        <div class="inner-wrap clearfix">
            <h2 class="title"><?php printf( __( 'Search Results for: %s', 'bms' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
            <p class="breadcrumbs">
                <a href="index.html">Home</a><i class="fa fa-angle-right"></i><strong>Locations</strong>
            </p>
        </div>
    </div>
    <?php } ?>
