<?php
/**
 * ana functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ana
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

// Sets up theme defaults and registers support for various WordPress features.
function ana_setup(): void {
    //Make theme available for translation.
    load_theme_textdomain( 'ana', get_template_directory() . '/languages' );
    // hard-coded <title> tag in the document head
    add_theme_support( 'title-tag' );
    //Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(['menu-1' => esc_html__( 'Primary', 'ana' ),]);
}
add_action( 'after_setup_theme', 'ana_setup' );

/**
 * Enqueue scripts and styles.
 */
function ana_scripts() {
	wp_enqueue_style( 'ana-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ana-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ana-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ana_scripts' );
