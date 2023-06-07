<?php
/**
 * Theme functions and definitions
 *
 * @package Avvy
 */

/**
 * After setup theme hook
 */
function avvy_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'avvy' );	
}
add_action( 'after_setup_theme', 'avvy_theme_setup' );

/**
 * Load assets.
 */

function avvy_theme_css() {
	wp_enqueue_style( 'avvy-parent-theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'avvy_theme_css', 99);

require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';

/**
 * Import Options From Parent Theme
 *
 */
function avvy_parent_theme_options() {
	$atua_mods = get_option( 'theme_mods_atua' );
	if ( ! empty( $atua_mods ) ) {
		foreach ( $atua_mods as $atua_mod_k => $atua_mod_v ) {
			set_theme_mod( $atua_mod_k, $atua_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'avvy_parent_theme_options' );