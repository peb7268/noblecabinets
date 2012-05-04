<?php
remove_filter ('the_content','wpautop');
remove_filter ('the_excerpt','wpautop');
$js_path = get_bloginfo('stylesheet_directory').'/js/';

wp_register_script('cycle', $js_path.'cycle.js', array('jquery', 'global'));
wp_register_script('global', $js_path.'global.js', array('jquery','jquery-ui'));
wp_register_script('jquery-ui', $js_path.'jquery-ui.js', array('jquery'));
wp_enqueue_script('cycle');
wp_enqueue_script('jquery-ui');
wp_enqueue_script('global');

//get the theme_dir in the content editor
function get_theme_dir(){
	$dir = get_bloginfo('stylesheet_directory');	
	return $dir;
}
add_shortcode('get_theme_dir', 'get_theme_dir');

//Add Builtin WP Support
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
) );
