<?php
/**
 * @package Atomic Blocks Child Theme
 */

/**
 * Load the parent and child theme styles
 */
function atomic_blocks_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'atomic-blocks-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'atomic-blocks-child-style', get_stylesheet_directory_uri(). '/style.css', array( 'atomic-blocks-style' ) );
}
add_action( 'wp_enqueue_scripts', 'atomic_blocks_parent_theme_style' );

/**
 * Add additional functions below
 */

/* REVISIONS TO POSTS  */

define('WP_POST_REVISIONS', 3);

/* ADD FONTS */

//Dequeue Styles
function project_dequeue_unnecessary_styles() {
    wp_dequeue_style( 'atomic-blocks-fonts' );
        wp_deregister_style( 'atomic-blocks-fonts' );
}
add_action( 'wp_print_styles', 'project_dequeue_unnecessary_styles' );


function custom_add_google_fonts() {
wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Arvo:400,400i,700|Bowlby+One', false );
}
add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

