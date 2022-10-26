<?php
/**
 * Magnetism & Accretion 2023 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Magnetism & Accretion 2023
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_MAGNETISM_ACCRETION_2023_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'magnetism-accretion-2023-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MAGNETISM_ACCRETION_2023_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Use custom text for "Other" option in Gravity Forms.
 */
add_filter( 'gform_other_choice_value', function( $value, $field ) {
    return 'I\'d rather specify my own';
    }, 10, 2 );
