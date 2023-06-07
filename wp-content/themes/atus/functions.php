<?php
/**
 * Theme functions and definitions
 *
 * @package Atus
 */

/**
 * After setup theme hook
 */
function atus_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'atus' );	
}
add_action( 'after_setup_theme', 'atus_theme_setup' );

/**
 * Load assets.
 */

function atus_theme_css() {
	wp_enqueue_style( 'atus-parent-theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'atus_theme_css', 99);


require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';


/**
 * Import Options From Parent Theme
 *
 */
function atus_parent_theme_options() {
	$atua_mods = get_option( 'theme_mods_atua' );
	if ( ! empty( $atua_mods ) ) {
		foreach ( $atua_mods as $atua_mod_k => $atua_mod_v ) {
			set_theme_mod( $atua_mod_k, $atua_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'atus_parent_theme_options' );