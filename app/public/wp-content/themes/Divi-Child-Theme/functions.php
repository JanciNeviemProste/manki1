<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );
 
 
//you can add custom functions below this line:
function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year', 'year_shortcode');

// Enqueue premium styles for Green Facades page
function enqueue_green_facades_premium_styles() {
    if (is_page_template('page-zelene-fasady.php')) {
        wp_enqueue_style('green-facades-premium', get_stylesheet_directory_uri() . '/green-facades-premium.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_green_facades_premium_styles');
