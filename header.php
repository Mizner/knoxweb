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
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<style>
<?php include('inline/head.css')?>
</style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'knoxweb' ); ?></a>
	<header id="masthead" class="site-header" role="banner" style="background: url(''); z-index: -101;">

	<div class="site-branding">

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" rel="home"><?php include('svg/logo.php')?><?php include('svg/knoxweb.php')?></a></h1>
			<div class="featuredHeader">
			<?php
				if ( is_front_page() ) {
				    include('inc/homehero.php');
				}
				else {
					the_title( '<h1 class="entry-title">', '</h1>' );
				}
				?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="menuContainer">
					<div class="menuButton"></div>
				</div>
				<div class="menuTitle"><?php esc_html_e( 'Menu', 'knoxweb' ); ?></div>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

			<button id="tog" class="search"><?php include('inc/search.php');?></button>
			<div class="searchform" id="thing">

				<?php get_search_form(); ?>

				</div>

			</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
