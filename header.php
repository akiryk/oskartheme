<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package leaner
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'leaner' ); ?></a>

	<header role="banner" class="masthead">
	  <div class="row">
	    <div class="large-12 columns">
	      <div class="left-section">
	        <div class="brand">
	        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Language<span class="strong">Up</span></a>
	        </div>
	      </div>
	      <div class="right-section">
	        <ul class="horizontal-list utility">
	          <li class="coach"><a href="http://language-up.com/?page_id=12">Become A Coach</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</header>

	<div id="content" class="site-content">
