<?php


function barfootCustomFiles(){
	wp_enqueue_script('barfootJavascript', get_theme_file_uri('/minified/scripts.min.js'), NULL, '1.0', true);
	wp_enqueue_script('swiperJS', get_theme_file_uri('/minified/swiper.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_style('customGoogleFonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css');
	wp_enqueue_style('swiperStyles', get_theme_file_uri('/minified/swiper.min.css'));
	wp_enqueue_style('barfootMainStyles', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'barfootCustomFiles');


function barfootFeatures(){
	register_nav_menu( 'barfootNavigation', 'Header Menu Location');
}

add_action('after_setup_theme', 'barfootFeatures');

add_theme_support('post-thumbnails');

function start_bla(){
	echo '<div class="listing-loop-wrapper">';
}
add_action( 'epl_property_loop_start' , 'start_bla', 30);

function end_bla(){
	echo '</div>';
}
add_action('epl_property_loop_end', 'end_bla', 0);


function create_staff() {

	$arg = array(
      'labels' => array(
        'name' => __( 'Staff' ),
        'singular_name' => __( 'Staff' ),
        'menu_name' => __('Staff')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-universal-access'
    );

  register_post_type( 'staff', $arg);
}
add_action( 'init', 'create_staff' );

function create_testimonials() {

	$arg = array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' ),
        'menu_name' => __('Testimonials')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-heart'
    );

  register_post_type( 'testimonials', $arg);
}
add_action( 'init', 'create_testimonials' );


// function modify_link_names ($array) {
//   $array = array(
//     'epl_button_label_mini_web' =>  __('Website ', 'easy-property-listings'))
//   );
//   return $array;
// }
// add_filter('epl_button_label_mini_web' , __('Website ', 'easy-property-listings'));


function modify_button_names() {

    return 'Website ';
}

add_filter('epl_button_label_mini_web', 'modify_button_names');

?>

