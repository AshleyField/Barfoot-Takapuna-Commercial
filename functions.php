<?php


function barfootCustomFiles(){
	wp_enqueue_script('barfootJavascript', get_theme_file_uri('/minified/scripts.min.js'), NULL, '1.0', true);
	wp_enqueue_script('swiperJS', get_theme_file_uri('/minified/swiper.min.js'), NULL, '1.0', true);
  wp_enqueue_script('lightboxJS', get_theme_file_uri('/minified/lightbox.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_style('customGoogleFonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,700,900|Roboto:300,400,500,700');
	wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css');
	wp_enqueue_style('swiperStyles', get_theme_file_uri('/minified/swiper.min.css'));
  wp_enqueue_style('lightboxStyles', get_theme_file_uri('/minified/lightbox.min.css'));
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

function create_slides() {

  $arg = array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' ),
        'menu_name' => __('Slides')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-slides'
    );

  register_post_type( 'slides', $arg);
}
add_action( 'init', 'create_slides' );

function create_properties() {

  $arg = array(
      'labels' => array(
        'name' => __( 'Properties' ),
        'singular_name' => __( 'Property' ),
        'menu_name' => __('Properties')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-admin-home'
    );

  register_post_type( 'properties', $arg);

  $arg = array(

    'label' => 'Property Status',
    'rewrite' => array( 'slug' => 'property-status' ),
    'hierarchical' => true,
    'show_admin_column' => true,
  );

  register_taxonomy('property_status', 'properties', $arg);

  $arg = array(

    'label' => 'Sale Type',
    'rewrite' => array( 'slug' => 'sale-type' ),
    'hierarchical' => true,
    'show_admin_column' => true,
  );

  register_taxonomy('sale_type', 'properties', $arg);
  
  $arg = array(

    'label' => 'Featured Property',
    'rewrite' => array( 'slug' => 'featured-property' ),
    'hierarchical' => true,
    'show_admin_column' => true,
  );

  register_taxonomy('featured_property', 'properties', $arg);

}
add_action( 'init', 'create_properties' );

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

function create_track_record() {

  $arg = array(
      'labels' => array(
        'name' => __( 'Track Record' ),
        'singular_name' => __( 'Track Record' ),
        'menu_name' => __('Track Record')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-awards'
    );

  register_post_type( 'trackrecord', $arg);
}
add_action( 'init', 'create_track_record' );



// function modify_link_names ($array) {
//   $array = array(
//     'epl_button_label_mini_web' =>  __('Website ', 'easy-property-listings'))
//   );
//   return $array;
// }
// add_filter('epl_button_label_mini_web' , __('Website ', 'easy-property-listings'));


function modify_button_names() {

    return 'View listing on barfoot.co.nz ';
}

add_filter('epl_button_label_mini_web', 'modify_button_names');

?>

