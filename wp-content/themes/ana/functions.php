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

    wp_enqueue_style( 'ana-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'ana-theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );

    wp_enqueue_script( 'ana-theme-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-wow', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-slick', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-fancybox', get_template_directory_uri() . '/assets/vendor/fancybox/dist/jquery.fancybox.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-jquery-lazy', get_template_directory_uri() . '/assets/vendor/jquery.lazy.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-counterup', get_template_directory_uri() . '/assets/vendor/jquery.counterup.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-waypoints', get_template_directory_uri() . '/assets/vendor/jquery.waypoints.min.js', array('jquery'), _S_VERSION );
    wp_enqueue_script( 'ana-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ana_scripts' );


function create_header_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
        $menu_list = '';
        $bool = false;
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {

                $parent = $menu_item->ID;

                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li class="nav-item"><a class="nav-link" href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                    $menu_list .= '<li class="nav-item dropdown mega-dropdown-md">' ."\n";
                    $menu_list .= '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">' . $menu_item->title . '</a>' ."\n";

                    $menu_list .= '<ul class="dropdown-menu">' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '</ul>' ."\n";

                } else {
                    $menu_list .= '<li class="nav-item">' ."\n";
                    $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                }

            }

            // end <li>
            $menu_list .= '</li>' ."\n";
        }
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }

    echo $menu_list;
}

