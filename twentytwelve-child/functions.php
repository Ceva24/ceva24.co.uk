<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action('wp_head','add_favicon');

function theme_enqueue_styles() {

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function add_favicon() {

    echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
}

?>