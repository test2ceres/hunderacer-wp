<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wellington
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

	<div id="header-top" class="header-bar-wrap"><?php do_action( 'wellington_header_bar' ); ?></div>

	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wellington' ); ?></a>

		<header id="masthead" class="site-header clearfix" role="banner">

			<div class="header-main container clearfix">

				<div id="logo" class="site-branding clearfix">

					<?php wellington_site_logo(); ?>
					<?php wellington_site_title(); ?>
					<?php wellington_site_description(); ?>

				</div><!-- .site-branding -->

				<div class="header-widgets clearfix">

					<?php // Display Header Widgets.
					if ( is_active_sidebar( 'header' ) ) :

						dynamic_sidebar( 'header' );

					endif; ?>

				</div><!-- .header-widgets -->

			</div><!-- .header-main -->

			<div id="main-navigation-wrap" class="primary-navigation-wrap">

				<?php do_action( 'wellington_header_search' ); ?>

				<nav id="main-navigation" class="primary-navigation navigation container clearfix" role="navigation">
					<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'main-navigation-menu',
							'echo' => true,
							'fallback_cb' => 'wellington_default_menu',
							)
						);
					?>
				</nav><!-- #main-navigation -->

			</div>

		</header><!-- #masthead -->

		<?php wellington_header_image(); ?>

		<?php wellington_slider(); ?>

		<?php wellington_breadcrumbs(); ?>

		<div id="content" class="site-content container clearfix">
