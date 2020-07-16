<?php
/**
 * VESTIBULUM functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage VESTIBULUM
 * @since VESTIBULUM 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */


// to register jquery
add_action( 'init', 'true_jquery_register' ); 
function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'https://code.jquery.com/jquery-3.5.1.slim.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}


function enqueue_styles() {	
	wp_register_style('font-style', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,600&display=swap');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'Vestibulum-style', get_stylesheet_uri());
	
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {	
	wp_register_script('html5-shim', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js');
	wp_enqueue_script('html5-shim');
	wp_register_script('fontawesome', 'https://use.fontawesome.com/a17d5d5b45.js', array('jquery'), NULL, true);
	wp_enqueue_script('fontawesome');
	wp_register_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), NULL, true);
	wp_enqueue_script('bootstrap-js');
	wp_register_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), NULL, true);
	wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// to add menu
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}


function footer_1()
{
    register_sidebar(array(
        'name' => 'Footer 1 section ',
        'id' => 'footer_1',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'footer_1');


function footer_2()
{
    register_sidebar(array(
        'name' => 'Footer 2 section ',
        'id' => 'footer_2',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'footer_2');

function footer_3()
{
    register_sidebar(array(
        'name' => 'Footer 3 section ',
        'id' => 'footer_3',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'footer_3');

function footer_4()
{
    register_sidebar(array(
        'name' => 'Footer 4 section ',
        'id' => 'footer_4',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'footer_4');

function footer_5()
{
    register_sidebar(array(
        'name' => 'Footer social ',
        'id' => 'footer_5',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'footer_5');



// miniatures for posts
add_theme_support( 'post-thumbnails', array( 'post' ) );