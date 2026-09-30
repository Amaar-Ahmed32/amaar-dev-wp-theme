<?php
/**
 * AmaarDev functions and definitions.
 *
 * Sets up theme support, enqueues the stylesheet, registers the AmaarDev
 * block pattern category and the "Ruled" group block style. The theme
 * creates no content and changes no options.
 *
 * @package AmaarDev
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version, read from the stylesheet header for cache busting.
 */
define( 'AMAARDEV_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Set up theme defaults and register support for WordPress features.
 *
 * @return void
 */
function amaardev_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'amaardev_setup' );

/**
 * Enqueue the theme stylesheet.
 *
 * @return void
 */
function amaardev_enqueue_styles() {
	wp_enqueue_style(
		'amaardev-style',
		get_stylesheet_uri(),
		array(),
		AMAARDEV_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'amaardev_enqueue_styles' );

/**
 * Register the "AmaarDev" block pattern category.
 *
 * @return void
 */
function amaardev_register_pattern_category() {
	register_block_pattern_category(
		'amaardev',
		array(
			'label' => __( 'AmaarDev', 'amaardev' ),
		)
	);
}
add_action( 'init', 'amaardev_register_pattern_category' );

/**
 * Register the "Ruled" block style for the Group block.
 *
 * @return void
 */
function amaardev_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'ruled',
			'label' => __( 'Ruled', 'amaardev' ),
		)
	);
}
add_action( 'init', 'amaardev_register_block_styles' );
