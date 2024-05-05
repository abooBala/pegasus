<?php

/**
 * Theme Functions
 * 
 * @package Pegasus
 * 
 */

 function pegasus_enqueue_scripts() {

    wp_enqueue_style("stylesheet", get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css') );

 }

 add_action( 'wp_enqueue_scripts','pegasus_enqueue_scripts' );

?>