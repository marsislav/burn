<?php

if (!function_exists('burn_support')):
    function burn_support () {
        add_theme_support('wp-block-styles');
        add_editor_style('style.css');
    } 
endif;
add_action( 'after_setup_theme', 'burn_support' );

/* Enqueue styles*/

if ( ! function_exists( 'burn_styles' ) ) :

    function burn_styles() {
      // Register Stylesheet
      wp_enqueue_style('burn-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
      wp_enqueue_style('burn-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    }
  
  endif;
  
  add_action( 'wp_enqueue_scripts', 'burn_styles' );