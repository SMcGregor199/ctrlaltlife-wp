<?php
/**
 * Enqueue front-end styles.
 */
function my_theme_styles() {

  wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );

/** 
 * Removes Admin Bar from Live Site Page
 */
add_filter( 'show_admin_bar', '__return_false' );