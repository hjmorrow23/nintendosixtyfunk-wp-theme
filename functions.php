<?php 
	
add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus() {
	
	register_nav_menus(
		array(
			'primary_menu' => __( 'Primary Menu' )
		)
	);
	
}

add_action( 'init', 'register_theme_menus');
	
function wpt_enqueue_styles() {
	
	wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	
	wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Raleway:500i');
	
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	
}

add_action('wp_enqueue_scripts' , 'wpt_enqueue_styles');

function wpt_theme_js() {
	
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
	
}

add_action('wp_enqueue_scripts' , 'wpt_theme_js');
	
?>