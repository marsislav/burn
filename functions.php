<?php

/*Theme functions 
@package Burn
*/
if (!defined('BURN_DIR_PATH')){
    define( 'BURN_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'BURN_DIR_URI' ) ) {
	define( 'BURN_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once BURN_DIR_PATH . '/inc/helpers/autoloader.php';

function burn_get_theme_instance () {
\BURN_THEME\Inc\BURN_THEME::get_instance();
}

burn_get_theme_instance();

function burn_enqueue_scripts(){
    
    //Scripts

   

}


add_action( 'wp_enqueue_scripts', 'burn_enqueue_scripts');