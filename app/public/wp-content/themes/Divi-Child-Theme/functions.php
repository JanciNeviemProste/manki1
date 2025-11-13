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
        wp_enqueue_style('green-facades-premium', get_stylesheet_directory_uri() . '/green-facades-premium.css', array('divi-style'), '1.0.3');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_green_facades_premium_styles', 20);

// Add MANKI badge to footer (works on both LOCAL and PROD)
function manki_footer_badge() {
    $src = get_theme_file_uri('assets/img/manki-badge.svg');
    if (!$src) return;

    echo '<img class="manki-footer-badge" src="' . esc_url($src) . '" alt="MANKI Green Solutions" loading="lazy" decoding="async" />';
}
add_action('wp_footer', 'manki_footer_badge', 20);
