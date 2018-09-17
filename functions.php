<?php


function barfootCustomFiles(){
	wp_enqueue_script('barfootJavascript', get_theme_file_uri('/minified/scripts.min.js'), NULL, '1.0', true);
	wp_enqueue_script('swiperJS', get_theme_file_uri('/minified/swiper.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_style('customGoogleFonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style('swiperStyles', get_theme_file_uri('/minified/swiper.min.css'));
	wp_enqueue_style('barfootMainStyles', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'barfootCustomFiles');


function barfootFeatures(){
	register_nav_menu( 'barfootNavigation', 'Header Menu Location');
}

add_action('after_setup_theme', 'barfootFeatures');

add_theme_support('post-thumbnails');

?>