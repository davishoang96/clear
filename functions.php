<?php
add_theme_support( 'post-thumbnails' );

//Main Stylesheet
function custom_css(){
    wp_enqueue_style('styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_css');

//Main bootstrap CSS
function bootstrap_css(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . "/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts', 'bootstrap_css');

function bootstrap_js(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.min.js" , array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');


function bootstrap_theme(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/js/bootstrap.theme.min.js" , array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_theme');


function main_jquery(){
    wp_enqueue_script('main_jquery', get_template_directory_uri() . "/js/jquery-3.0.0.min.js" , array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'main_jquery');


//Bootstrap Walker
require('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

//Pull masonry bundle from the WP Core
function masonry(){
    wp_enqueue_script( 'masonry' );
}
add_action('wp_enqueue_scripts', 'masonry');

function custom_masonry(){
    wp_enqueue_script('custom_masonry', get_template_directory_uri() . "/js/custom_masonry.js" , array('jquery'), '', true);
}
add_action('wp_footer', 'custom_masonry');


?>