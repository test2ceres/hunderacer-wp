<?php
/**
 * modify functional.
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('admin_head', 'admin_hunderacer_custom_fonts');
function admin_hunderacer_custom_fonts() {
    wp_enqueue_style('admin_styles', get_template_directory_uri(). '/css/style.css');
}
