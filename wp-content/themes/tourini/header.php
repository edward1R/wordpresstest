<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tourini
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'tourini' ); ?></a>

	<header id="header" class="site-header" role="banner">
		<div id="static-area-header-top" class="staic-area header-top">
			<div class="static-header-logo">
				<div class="site-branding">
					
					<h1 class="site-title image-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="http://ld-wp.template-help.com/wordpress_58593/wp-content/uploads/2016/03/logo_26459.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
					</h1>
										
					<!-- <?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?> -->

				</div><!-- .site-branding -->
			</div>

			<div class="static-header-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', "menu_class" => 'menu-items' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #header -->

	<div id="content" class="site-content">
