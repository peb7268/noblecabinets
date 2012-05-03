<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Almendra+SC|Francois+One|Felipa' rel='stylesheet' type='text/css'>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
<div id="header">
	<div class="inner">
	<div id="top">
	<a href="<?php echo home_url( '/' ); ?>" id="logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	</a>
	
	<div id="search">
		<?php get_search_form(); ?>
	</div><!-- #search -->

	
	<!-- <p><?php //bloginfo( 'description' ); ?></p> -->
	</div><!-- #top -->

	<div id="access" role="navigation">
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
		<ul id="social">
				<li id="facebook"><a href="http://www.facebook.com/NobleCabinets" target="_blank">facebook</a></li>
				<li id="twitter"><a href="http://twitter.com/#!/noblecabinets" target="_blank">twitter</a></li>
				<li id="tweet">
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="Check Out The Noble Cabinet Shop" data-via="noblecabinets">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
				<li id="like" style="position: relative; display: block;">
					<div id="fbAnchor" style="position: absolute !important; bottom: -20px !important;">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187996341275269";
						fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-like" data-href="http://www.noblecabinetshop.com/" data-send="false" data-layout="button_count" data-width="77" data-show-faces="false" data-action="recommend"></div>
					</div><!-- #fbAnchor -->
				</li>
			</ul>
	</div> 
	</div><!-- .inner -->
<div class="clear">&nbsp;</div>
</div><!-- #header -->