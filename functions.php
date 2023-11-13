<?php
/**
 * Theme Functions.
 * 
 * @package aquila
 * 
 */

function aquila_enqueue_scripts(){
    
    //Register Style
    wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory(). '/assets/style.css'), 'all');

    //Register Script
    wp_enqueue_script ( 'main-js', get_template_directory_uri(). '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    //Enqueue Styles
    wp_enqueue_style( 'bootstrap-css');

    //Enqueue Scripts
    wp_enqueue_script('bootstrap-js');
}  

add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts');
?>