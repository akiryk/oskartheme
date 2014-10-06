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
	          Language<span class="strong">Up</span>
	        </div>
	      </div>
	      <div class="right-section">
	        <ul class="horizontal-list utility">
	          <li class="coach demo-only">Become A Coach</li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</header>

	<div id="content" class="site-content">
