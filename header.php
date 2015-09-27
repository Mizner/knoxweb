<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package knoxweb
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--enqueue below later -->
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<script src="//use.typekit.net/mnr3gor.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--enqueue above later -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'knoxweb' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
	<div class="videoBackground">
		<video autoplay loop muted poster="<?php header_image(); ?>" id="video-bg">
 			<source src="video.webm" type="video/webm">
			<source src="/wp-content/uploads/2015/09/onTablet.mp4" type="video/mp4">
		</video>
	</div>
    <div class="fixed-header">
    	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="menuContainer">
					<div class="menuButton"></div>
				</div>
				<div class="menuTitle"><?php esc_html_e( 'Menu', 'knoxweb' ); ?></div>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="site-branding">
			<svg class="logosvg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
						<style type="text/css">
						.st0{fill:#FFFFFF;}
						.st1{fill:none;}
						</style>
						<g>
							<path class="st0" d="M269.9,112.2c1.6-2.5,3-4.8,4.4-7.1c0.3-0.4,0.5-0.9,0.8-1.3c0.2-0.3,0.5-0.4,0.8-0.6c0.2,0.3,0.5,0.6,0.6,0.9
								c0.5,2.4,0.3,4.6-0.9,6.8c-1,1.9-0.7,4,0.3,5.9c2.3,4.3,3.5,8.8,3.4,13.7c0,3.2-0.1,6.4,0,9.6c0.1,5,0.6,10,2,14.8
								c1.1,3.5,2.2,7,4.4,10.1c1.5,2.1,3.2,4,4.7,6.1c1.1,1.5,2.3,3,2.9,4.7c0.5,1.2,0.4,2.7,0.2,4.1c-0.5,4.4-1.9,8.5-3.3,12.6
								c-1.7,5-3.5,9.9-5.5,14.7c-1.4,3.3-3,6.6-4.8,9.7c-3,5.2-6.1,10.3-9.4,15.3c-2,3-4.4,5.8-6.7,8.6c-0.4,0.5-1.1,0.9-1.7,1
								c-3.3,0.6-6.5,1-9.8,1.7c-4.7,1-9.3,2.2-14,3.1c-4.1,0.7-7.9-0.2-10.4-3.9c-1.4-2.2-3.4-2.8-5.6-3.3c-3.4-0.7-6.7-1.3-10.1-1.9
								c-2.9-0.6-5.8-1.3-8.7-1.7c-3-0.4-6.1-0.8-9.2-0.8c-3,0-5.9,0.7-8.9,1c-3,0.3-6,0.8-9.1,0.9c-1.8,0.1-3.6-0.2-5.4-0.7
								c-2.3-0.6-4.1,0.3-5.8,1.5c-1.7,1.1-3.3,2.5-5.2,3.4c-1.6,0.8-3.5,1.2-5.3,1.4c-2.6,0.3-5.2,0-7.6-1.1c-3.7-1.7-5-3.9-4.5-8.2
								c0.2-1.4,0.4-2.8,0.3-4.2c-0.2-2.1-1.7-3.3-3.7-3.8c-2.5-0.6-5-0.8-7.5-1.2c-1.1-0.2-2.1-0.3-3.3-0.5c0.5-1.7,0.9-3.3,1.5-4.7
								c0.9-2.2,0.8-4.5,0.1-6.7c-0.1-0.3-0.5-0.6-0.9-0.7c-2.1-0.4-4.1-0.3-5.6,1.6c-1.7,2-3.9,3.2-6.4,2.3c-2.1-0.7-4-1.9-5.8-3.1
								c-2.8-1.8-3.6-4.6-3.8-7.7c-0.2-3.6,0.5-7.1,2.5-10.1c2-3,4.9-4.3,8.5-4.7c3.4-0.4,6.5,1.2,9.8,0.8c1.6-0.2,3.2-0.5,4.7-0.8
								c4.9-0.7,8.5,1.2,11.6,4.9c1.4,1.8,3.2,3.3,5,4.8c0.5-2,0.3-3.9-0.2-5.8c-1.1-4.3-0.8-8.4,2.7-11.6c1.3-1.2,2.9-2.2,4.2-3.4
								c2.1-1.9,3.6-4.1,4.6-6.7c1.2-3.1,2.2-6.3,3.6-9.2c2-4.1,5-7.7,7.8-11.3c2.4-3.2,5.8-4.1,9.3-5.3c1.7-0.6,3.3-1.6,5-2.4
								c0.4-0.2,0.6-0.8,1-1.3c-1.4-0.6-2.7-1.1-3.9-1.7c-1.3-0.6-2.6-1.2-3.7-2.1c-1.3-1-2.4-2.1-3.6-3.3c-0.7-0.7-0.5-1.4,0.4-1.7
								c3.7-1.3,7.3-2.6,11-4c0.8-0.3,1.3-0.2,1.8,0.5c1.3,1.9,2.7,3.7,4.1,5.5c2,2.3,4.5,2.3,7.5,1.5c-1.2-1.1-2.2-2.1-3.3-3
								c-4.1-3.4-7.9-7.1-11.1-11.4c-3.2-4.3-6.7-8.3-11.7-10.6c-1.6-0.7-3.3-1.2-4.9-1.6c-2.7-0.8-5-2.2-7.2-3.9c-2.1-1.6-4.5-2.6-7-3.3
								c-1.4-0.3-2.2,0.1-2.3,1.5c-0.2,1.7,0,3.4,0,5.2c0.1,3.8,0.3,7.6,0.3,11.4c0,3.3-0.8,6.5-2,9.6c-0.4,1.1-0.9,1.2-1.7,0.3
								c-1.1-1.3-2.2-2.6-3.1-4c-0.7-1.1-1.1-2.5-1.4-3.8c-0.6-2.5-2.2-3.8-4.5-4.6c-1.4-0.5-2.9-0.9-4.2-1.5c-4.3-2-5.3-5.7-3.7-10
								c0.9-2.3,2.3-4.2,4-6c1.9-2,3.9-4.1,6-6c2.9-2.6,5.2-5.7,7.3-8.9c0.6-1,1.2-1,2-0.4c0.8,0.6,1.8,1,2.6,1.6c1.7,1.2,2.2,3,1.8,5
								c-0.5,2.3-1.1,4.5-1.6,6.9c2.4,0.7,4.8,1.5,7.2,2.2c0.5,0.2,1,0.4,1.5,0.6c1.9,0.9,3.1,0.8,4.1-1c1-1.9,1.6-4.1,2.1-6.2
								c0.3-1.4-0.6-2.5-1.8-3.3c-1.6-1.1-3.3-2-4.9-3.2c-0.8-0.6-1.4-1.5-1.9-2.3c-1.4-2.8-3.6-4.7-6.3-6c-2.3-1.1-4.6-2-6.9-2.9
								c-2.4-1-4.6-0.1-7.1,0.6c1.6,2,3.1,3.8,4.5,5.6c0.1,0.1,0.2,0.2,0.3,0.3c1.2,1.5,1,2.1-0.9,2.5c-2.2,0.4-3.2-1-4.2-2.4
								c-1.2-1.6-2.4-3.3-3.7-5.2c-0.3,0.7-0.4,1.2-0.6,1.8c-0.6,1.8-1.3,3.4-3.1,4.3c-0.8,0.4-1.3,0.2-1.8-0.3c-0.9-1.1-1.4-2.1-1.1-3.7
								c0.4-2.2-0.4-4.3-1.8-6c-1.5-1.7-3.1-3.4-4.9-4.8c-0.8-0.7-2-1-3.1-1.1c-1.5-0.2-2.9,0-4.6,0c0.5,0.8,1,1.7,1.5,2.5
								c1.9,3.2,3.9,6.4,5.9,9.5c0.6,0.9,0.7,1.7-0.2,2.3c-0.8,0.6-1.5,1.2-2.6,0.1c-3.6-3.4-7.4-6.8-11.1-10.2c-2.3-2.2-4.6-4.4-6.9-6.6
								c-1.4-1.3-1.9-3-2.2-4.8c-0.3-1.7-0.3-3.4-0.5-5.1c-0.3-2.9-3.1-4.4-6.2-3.8c-1.9,0.4-3.9,0.6-5.9,0.7c-2.5,0-4.6,1.4-5.4,3.8
								c-0.3,1-1.8,1.7-3.2,1.4c-1.5-0.3-3-0.5-4.5,0.1c-2,0.8-2.8,2.5-3.6,4.2c-0.4,0.9-0.7,1.8-1.1,2.7c-1,2.2-2.8,3.1-5.7,2.8
								c0.9,0.5,1.8,1,2.7,1.4c3.1,1.4,6.2,2.7,9.3,4.2c3.2,1.5,5.7,6.4,5.4,10.4c-0.3,4.1-1.3,7.9-2.2,11.8c-0.5,2.4-1.4,4.8-1.8,7.2
								c-0.5,2.9-0.5,5.8-0.9,8.7c-0.3,2.6-0.8,5.2-1.4,7.7c-1.1,4.4-3.8,8.1-5.7,12.2c-2,4.4-3.8,9-4.2,13.9c-0.3,3.4-0.5,6.9-0.3,10.3
								c0.2,3.1,1,6.3,1.9,9.3c1.2,4.4,2.4,8.7,3.9,13c1,2.9,1.8,5.9,3.9,8.2c0.3,0.4,0.7,0.7,1.3,0.9c-0.3-1.4-0.6-2.8-0.9-4.1
								c-0.8-3-1.7-6-2.4-9.1c-0.1-0.4,0.1-1.3,0.4-1.4c0.6-0.3,1.4-0.4,2-0.2c1.4,0.5,1.6,2,2.1,3.2c1.7,4.3,3.4,8.6,5,13
								c1.5,4.3,2.9,8.6,4.4,12.9c0.9,2.5,2.4,4.6,4.5,6.2c2.2,1.8,4.3,3.7,6.7,5.3c4.9,3.3,10.2,5.9,15.6,8.3c4.4,2,8.7,4,13,6
								c2.9,1.3,5.2,3.4,6.5,6.3c0.8,1.9,1.8,3.6,3.2,5.1c2.3,2.4,5.1,3.5,8.3,3.9c2.1,0.2,4.2,0.2,6.2,0.3c1.4,0.1,2.7,0.1,4.1,0.3
								c1,0.1,1.7,0.6,1.6,1.8c-0.2,2.3-0.1,4.6-0.4,6.9c-0.4,3.1-2.3,5.2-5.2,6.2c-3,1-4,3.2-4.2,6c-0.1,1.9-0.5,3.9,1.1,5.4
								c1.2,1.1,2.5,2.2,3.8,3.2c3.8,3.1,7.7,6.2,11.5,9.3c2.4,1.9,4.8,3.8,7.2,5.7c0.2,0.2,0.4,0.3,0.6,0.5c0.2,0.3,0.4,0.7,0.6,1.1
								c-0.3,0.2-0.7,0.5-1,0.5c-3.6,0.4-7.2,1-10.8,1.2c-5.4,0.3-10.9,0.4-16.3,0.3c-3.1,0-6.2-0.5-9.3-1c-3.7-0.5-7.5-1.1-11.1-1.9
								c-4.8-1-9.5-2.1-14.1-3.6c-6.1-2.1-12.2-4.6-18.1-7.1c-3-1.3-5.8-2.8-8.6-4.5c-5.2-3.1-10.4-6.2-15.4-9.7c-3.5-2.4-6.8-5.3-10-8.1
								c-2.7-2.3-5.3-4.8-7.8-7.3c-4.7-4.7-8.9-9.8-12.8-15.2c-4.3-5.9-8.1-12.1-11.5-18.5c-2-3.7-3.7-7.6-5.3-11.6
								c-2.2-5.8-4.3-11.7-6.1-17.6c-1.2-4.1-1.9-8.3-2.8-12.5c-1.3-5.7-2-11.5-2.2-17.3c-0.2-5.4-0.5-10.8-0.2-16.2
								c0.4-6.4,1.3-12.7,2.4-19c0.9-5,2.1-10,3.6-14.8c1.6-5.1,3.4-10.2,5.6-15.1c2.5-5.7,5.4-11.3,8.4-16.8c2.2-3.9,4.9-7.5,7.5-11.2
								C41,56,47,49.3,53.6,43.1c3.7-3.5,7.6-6.8,11.7-9.8c4.8-3.5,10-6.6,15-9.8c1.6-1,3.3-1.7,5-2.5c0.8-0.4,1.1-0.2,1.4,0.7
								c0.6,1.8,0.7,3.5-0.3,5c-0.6,0.9-1.4,1.8-2.3,2.5c-2,1.7-4,3.2-6,5c-1.5,1.3-1.5,2.3-0.3,3.9c0.7,0.8,1.5,1.5,2.2,2.3
								c1.1,1.1,2.2,2.2,3.1,3.4c0.3,0.4,0.3,1.2,0.2,1.7c-0.2,1-0.7,2-1,3c0.1,0.1,0.2,0.2,0.2,0.3c1-0.4,2.2-0.5,3-1.1
								c3.3-2.7,6.4-5.5,9.5-8.5c2-1.9,3.3-4.3,4-7c0.1-0.5,0.6-1.1,1-1.4c1.7-1.2,3.7-1.5,5.7-1.9c1.3-0.2,2.6-0.5,3.2-1.9
								c0.1-0.2,0.2-0.5,0.3-0.7c0.2-0.8,0.1-2,0.6-2.3c1.3-0.9,2.7-1.4,4.2-1.9c1.2-0.4,2.6-0.4,3.8-1c1-0.5,2.1-1.4,2.4-2.4
								c0.7-2.4,2.6-2.8,4.4-3.3c3.1-0.9,6.2-1.7,9.4-2.3c1.7-0.4,3.5-0.6,5.3-0.4c1,0.1,2.1,0.7,2.9,1.5c1.8,1.8,3.7,3.2,6.2,3.4
								c1.9,0.1,3.9-0.1,5.8-0.2c2.8-0.3,5.6-0.7,8.3-0.9c3.3-0.3,6.6-0.3,9.9-0.6c1.4-0.1,2.9-0.2,4.3-0.5c0.7-0.1,1.4-0.5,1.9-0.9
								c2.8-2.3,4.7-1.8,7.1,0c4.1,3,8,6.1,12.1,9.1c2.2,1.7,4.2,3.5,5.8,5.8c0.7,1,1.5,1.3,2.6,0.7c0.5-0.3,1.1-0.5,1.6-0.7
								c2.3-0.9,4,0.1,4.3,2.5c0,0.3-0.3,0.9-0.6,1c-2.3,0.9-4.6,1.7-7,2.5c-1.3,0.5-2.7,0.9-4.2,1.4c3.2,3.1,6.2,5.9,10.1,7.8
								c3.5,1.7,7,3.7,9.8,6.6c1.1,1.1,2,2.3,2.8,3.6c1.9,3.2,4.8,4.5,8.3,4.9c0.5,0,1.1-0.1,1.5-0.4c1.6-1.1,3.2-2.4,4.9-3.7
								c-0.4-0.4-0.7-0.7-1-0.9c-3.5-2.8-7-5.5-10.5-8.3c-0.9-0.7-1.3-1.5-0.9-2.8c0.3-1.1,0.2-2.3,0.4-3.4c0.1-0.7,0.4-1.3,0.6-2.2
								c3.4,1.9,6.7,3.5,9.8,5.4c2,1.2,2.6,3.6,3.3,5.7c1,3.1,2.1,6.2,3.2,9.3c0.5,1.3,1.3,2.5,1.7,3.8c1.1,3.8,3.8,6.5,6.2,9.4
								c0.3,0.4,0.8,0.9,0.9,1.4c0.1,0.5-0.2,1.2-0.5,1.5c-0.3,0.3-1.1,0.3-1.5,0.1c-5-2.3-9.9-4.7-14.8-7.1c-0.6-0.3-1.1-0.6-1.7-0.9
								c-0.3-0.1-0.6,0-0.9,0.1c0.1,0.3,0,0.6,0.2,0.8c2.3,3.1,3.2,6.8,4.7,10.2c1.2,2.9,3.2,5.1,6.4,6.6c-0.7-1.6-1.3-2.9-1.9-4.2
								c-0.1-0.3-0.3-0.5-0.4-0.8c-0.1-0.4-0.1-0.8-0.2-1.2c0.4,0,0.8-0.1,1.2,0.1c2.5,0.8,5,1.7,7.7,2.6c0.3-1.3,0.6-2.4,0.8-3.6
								c0.1-0.3,0.1-0.7,0.3-1c0.4-0.4,0.9-0.9,1.5-1c0.3,0,0.9,0.7,1,1.2c0.3,2.2,0.6,4.4,0.7,6.5c0.1,3.2,1.5,4.8,4.7,5.3
								c0.9,0.1,1.8,0.3,2.7,0.5c3,0.8,3.1,2.6,2.4,5c-0.3,1.2-0.9,2.3-1.3,3.4c-0.8,2.6,0.1,4.9,1.5,7
								C265.7,106.9,267.8,109.5,269.9,112.2z M200.8,98c-1.1-0.7-2-1.3-2.8-1.8c-1.4-0.9-2.4-2-2.3-3.8c0.1-0.8,0-1.7,0-2.6
								c0-2.8-0.1-5.6,0.1-8.4c0.3-3.4,1.6-6.5,3-9.7c0.8-1.9,0.4-4.5-1.2-5.7c-3.2-2.3-6.5-4.4-9.9-6.5c-3-1.8-6-3.5-9-5.3
								c-2.6-1.5-5.2-3-8.3-3c-3.6,0-6.9,1.1-9.7,3.5c-1.3,1.1-2.7,2-4.5,1.5c-1.3-0.4-2.5-0.7-3.8-1c-1.8-0.5-3.2,0-3.8,1.4
								c-1.2,2.9-2.1,6-2.2,9.2c-0.1,1.4,0.5,2.3,1.5,3c0.9,0.6,1.9,1,2.8,1.5c0.6,0.3,1.2,0.1,1.4-0.6c0.6-1.5,1.1-3,1.9-4.4
								c0.9-1.6,0.8-2.2,2.6-0.7c0.4,0.4,0.9,0.7,1.3,1c6.4,4.8,12.3,10,17.7,16c1.5,1.7,2.9,3.7,3.8,5.8c1.8,4.1,3.8,7.8,7.2,10.8
								c1.9,1.7,3.9,3.1,6.5,2.6c1.7-0.3,3.4-1,5.1-1.6C198.9,99,199.7,98.5,200.8,98z M209.7,80c1.7-2.7,3.4-5.3,5-8
								c0.1-0.2,0.1-0.8-0.1-1c-0.6-0.7-1.2-1.4-1.9-1.9c-0.4-0.3-1.1-0.4-1.5-0.2c-2.6,1.6-5.2,3.3-7.9,5.1C205.5,76.1,207.5,78,209.7,80
								z M142.5,210.3c0.2,0.1,0.3,0.2,0.4,0.1c2-0.4,3.9,0,5.6,0.9c2.3,1.2,4.6,2.5,6.9,3.8c2.6,1.5,5.3,2.3,8.3,1.4
								c0.4-0.1,0.7-0.9,0.9-1.4c0.1-0.2-0.2-0.8-0.4-0.9c-0.9-0.3-1.8-0.5-2.7-0.7c-3.5-0.8-7-1.6-10.5-2.4c-2.5-0.6-4.9-1.2-7.4-1.8
								C143.1,209.3,142.4,209.2,142.5,210.3z M167.1,218.5c1,0.1,1.7,0.2,2.3,0.3c2.8,0.5,5.6,0.9,8.4,1.4c0.2,0,0.6-0.1,0.8-0.2
								c0.1-0.1,0.1-0.5,0-0.7c-1.5-1.7-3.2-3.4-5.5-3.5C170.9,215.6,169.2,217,167.1,218.5z"/>
								<path id="XMLID_5_" class="st0" d="M272.6,73.8c-0.8-1.2-1.5-2.1-2-3.1c-0.3-0.6-0.3-1.3-0.4-1.9c0.9-0.1,1.8-0.4,2.6-0.2
									c0.6,0.1,1.1,0.8,1.4,1.3c2.1,3.7,4.2,7.5,6.3,11.2c0.4,0.7,0.2,1.3-0.4,1.8c-2.6,2.6-3,5.8-2.6,9.3c0.3,2,0.4,4-0.3,6.1
									c-2.1-0.1-3.4-1.3-4.5-2.8c-2.6-3.6-3.6-7.9-4.6-12.1c-0.4-1.9-0.6-3.8-1-5.6c-0.2-0.9,0-1.5,0.9-1.8
									C269.6,75.3,271,74.6,272.6,73.8z"/>
									<path id="XMLID_4_" class="st1" d="M200.8,98c-1.1,0.5-1.8,1-2.7,1.3c-1.7,0.6-3.3,1.3-5.1,1.6c-2.6,0.5-4.6-0.9-6.5-2.6
										c-3.4-3-5.4-6.8-7.2-10.8c-0.9-2.1-2.3-4.1-3.8-5.8c-5.3-5.9-11.3-11.2-17.7-16c-0.4-0.3-0.9-0.7-1.3-1c-1.8-1.5-1.7-0.9-2.6,0.7
										c-0.8,1.4-1.3,3-1.9,4.4c-0.3,0.7-0.8,0.9-1.4,0.6c-1-0.4-2-0.8-2.8-1.5c-1-0.7-1.6-1.6-1.5-3c0.2-3.2,1-6.3,2.2-9.2
										c0.6-1.4,2-1.9,3.8-1.4c1.3,0.3,2.5,0.7,3.8,1c1.9,0.5,3.2-0.4,4.5-1.5c2.8-2.3,6.1-3.5,9.7-3.5c3.1,0,5.7,1.5,8.3,3
										c3,1.8,6.1,3.4,9,5.3c3.4,2.1,6.7,4.2,9.9,6.5c1.6,1.2,2,3.8,1.2,5.7c-1.3,3.1-2.7,6.3-3,9.7c-0.2,2.8-0.1,5.6-0.1,8.4
										c0,0.9,0.1,1.7,0,2.6c-0.2,1.8,0.9,2.9,2.3,3.8C198.8,96.7,199.6,97.2,200.8,98z"/>
										<path id="XMLID_3_" class="st1" d="M209.7,80c-2.2-2-4.2-3.9-6.4-6c2.7-1.8,5.3-3.5,7.9-5.1c0.3-0.2,1.1-0.1,1.5,0.2
											c0.7,0.5,1.3,1.2,1.9,1.9c0.2,0.2,0.3,0.8,0.1,1C213.1,74.6,211.4,77.2,209.7,80z"/>
											<path id="XMLID_2_" class="st1" d="M142.5,210.3c-0.1-1.1,0.6-1,1.2-0.8c2.5,0.6,4.9,1.2,7.4,1.8c3.5,0.8,7,1.6,10.5,2.4
												c0.9,0.2,1.8,0.4,2.7,0.7c0.2,0.1,0.5,0.6,0.4,0.9c-0.2,0.5-0.5,1.2-0.9,1.4c-3,0.9-5.7,0-8.3-1.4c-2.3-1.3-4.6-2.6-6.9-3.8
												c-1.8-0.9-3.7-1.3-5.6-0.9C142.8,210.5,142.7,210.4,142.5,210.3z"/>
												<path id="XMLID_1_" class="st1" d="M167.1,218.5c2-1.5,3.8-2.9,6-2.7c2.4,0.1,4,1.8,5.5,3.5c0.1,0.1,0.1,0.6,0,0.7
													c-0.2,0.2-0.5,0.3-0.8,0.2c-2.8-0.4-5.6-0.9-8.4-1.4C168.8,218.7,168.1,218.6,167.1,218.5z"/>
												</g>
												<g id="XMLID_11_">
												</g>
												<g id="XMLID_12_">
												</g>
												<g id="XMLID_13_">
												</g>
												<g id="XMLID_14_">
												</g>
												<g id="XMLID_15_">
												</g>
												<g id="XMLID_16_">
												</g>
												<g id="XMLID_17_">
												</g>
												<g id="XMLID_18_">
												</g>
												<g id="XMLID_19_">
												</g>
												<g id="XMLID_20_">
												</g>
												<g id="XMLID_21_">
												</g>
												<g id="XMLID_22_">
												</g>
												<g id="XMLID_23_">
												</g>
												<g id="XMLID_24_">
												</g>
												<g id="XMLID_25_">
												</g>
											</svg>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</div><!-- .fixed-header -->
	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
