<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function qjs() {
    wp_register_script('app', trailingslashit( get_stylesheet_directory_uri() ) . 'app.js', false, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'qjs');


// function add_custom_footer_content() {
//     get_template_part('footer');
//  }
 
// add_action('wp_footer', 'add_custom_footer_content'); 

function fff() {
    register_nav_menu('footer', 'Footer');
}

add_action('after_setup_theme', 'fff');

function hhh() {
    register_nav_menu('Menu principal', 'Header');
}

add_action('after_setup_theme', 'hhh');

function admin_menu_user() {
    register_nav_menu('Menu admin', 'Admin');
}

add_action('after_setup_theme', 'admin_menu_user');

// END ENQUEUE PARENT ACTION