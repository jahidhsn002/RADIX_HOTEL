<?php

include( dirname( __FILE__ ) . "/inc/class-Upbootwp_Walker_Nav_Menu.php" );

include( dirname( __FILE__ ) . '/inc/apf/admin-page-framework.php' );
if ( ! class_exists( 'hub_AdminPageFramework' ) ) { return; }

include( dirname( __FILE__ ) . '/inc/dash.php' );
include( dirname( __FILE__ ) . '/inc/postType.php' );



function dash($section,$field,$default){
	$data = hub_AdminPageFramework::getOption( 'dash', array( $section, $field ), $default );
	return $data;
}
	
// Theme Setup
if ( ! function_exists( 'labibacademy_setup' ) ) :
function labibacademy_setup(){

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' )
	) );

}
endif;
add_action( 'after_setup_theme', 'labibacademy_setup' );

// Register widget area.
function labibacademy_widgets_init(){
	register_sidebar( array(
		'name'          => __( 'Home Popular Info Tab' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Here You Can Add Popular Info Tab' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Testimonials' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Here You can edit Home tastimonial Info' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Address Area' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add address not more then 3 times' ),
		'before_widget' => '<div class="col-md-4 touch-grid">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'labibacademy_widgets_init' );

// Enqueue scripts and styles.
function labibacademy_scripts(){

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'Main_CSS', 	get_stylesheet_directory_uri() . '/css/min.css', array(), '3.2' );
	
	wp_enqueue_script( 'Main_JS', get_stylesheet_directory_uri() . '/js/min.js', array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'labibacademy_scripts' );

if ( is_array( $o ) && isset( $o[ $i ] ) ) unset( $o[ $i ] );
