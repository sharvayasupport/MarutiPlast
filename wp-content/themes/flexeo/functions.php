<?php
/**
 * Theme functions and definitions
 *
 * @package Flexeo
 */

/**
 * After setup theme hook
 */
function flexeo_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'flexeo' );	
}
add_action( 'after_setup_theme', 'flexeo_theme_setup' );

/**
 * Load assets.
 */

function flexeo_theme_css() {
	wp_enqueue_style( 'flexeo-parent-theme-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'flexeo-custom-js', get_stylesheet_directory_uri() . '/assets/js/flexeo_custom.js', array('jquery'), false, true );	
}
add_action( 'wp_enqueue_scripts', 'flexeo_theme_css', 99);


require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';


/**
 * Import Options From Parent Theme
 *
 */
function flexeo_parent_theme_options() {
	$atua_mods = get_option( 'theme_mods_atua' );
	if ( ! empty( $atua_mods ) ) {
		foreach ( $atua_mods as $atua_mod_k => $atua_mod_v ) {
			set_theme_mod( $atua_mod_k, $atua_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'flexeo_parent_theme_options' );