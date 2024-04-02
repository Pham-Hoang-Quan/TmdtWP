<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BlackCart
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0
 */
function blackcart_styles() {
	wp_enqueue_style(
		'blackcart-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'blackcart_styles' );

define( 'BLACKCART_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'blackcart_setup' ) ) {
	function blackcart_setup() {

		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'block-nav-menus' );

	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'blackcart', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'blackcart_setup' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
//load Welcome Notice
require get_template_directory() . '/inc/admin/admin-notice.php';
//load Theme Info
require get_template_directory() . '/inc/admin/theme-info.php';

// Theme Activation Notice
add_action( 'admin_notices', 'blackcart_activation' );

// Theme Ignore
add_action( 'admin_init', 'blackcart_ignore' );
function blackcart_ignore() {
  global $current_user;
  $user_id   = $current_user->ID;
  $theme_data  = wp_get_theme();

  if ( isset( $_GET[ sanitize_key( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) && '0' == $_GET[ sanitize_key( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) {
    add_user_meta( $user_id, sanitize_key( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore', 'true', true );
  }
}

function blackcart_admin_css (){

  wp_enqueue_style( 'blackcart-admin-css', get_template_directory_uri() . '/inc/admin/admin.css' );
  $deps = array( 'wp-api-fetch' );
	$handle = 'blackcart-admin';
	wp_enqueue_script( $handle, get_template_directory_uri() . '/assets/js/admin.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'assets/js/admin.js' ) ) ), true );

	wp_localize_script( $handle, 'blackcart',
        array(
            'blackcart_nonce' => wp_create_nonce( "blackcart-nonce" ),
            'blackcart_demo_import_page' => esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ),
        )
    );

}

add_action( 'admin_enqueue_scripts', 'blackcart_admin_css' );