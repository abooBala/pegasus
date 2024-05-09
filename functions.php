<?php

/**
 * Theme Functions
 * 
 * @package Pegasus
 * 
 */


if ( ! defined("PEGASUS_DIR_PATH") ) {
   define('PEGASUS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

 require_once PEGASUS_DIR_PATH . '/inc/helpers/autoloader.php' ;

 function pegasus_enqueue_scripts() {

    // Stylesheets
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css') );
    wp_register_style('tailwind-css', 'https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css', [], false, 'all' );

    // Scripts
    wp_register_script('main-js', get_template_directory_uri() . './assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true);
    wp_register_script('tailwind-js', 'https://cdn.tailwindcss.com', ['jquery'], false, true);


    // Enqueue script
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('tailwind-css');

    // Enque Scripts
    wp_enqueue_script('main-js');

 }

 add_action( 'wp_enqueue_scripts','pegasus_enqueue_scripts' );

?>