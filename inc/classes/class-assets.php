<?php
/*Enqueue theme assets 
@package Burn
*/

namespace Burn_Theme\Inc;
use BURN_THEME\Inc\Traits\Singleton;
class Assets {
    use Singleton;

    protected function __construct() {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
    //actions and filters
    add_action( 'wp_enqueue_scripts', [$this, 'register_styles']);
    add_action( 'wp_enqueue_scripts', [$this, 'register_scripts']);
}

public function register_styles () {
    wp_enqueue_style('bootstrap', BURN_DIR_URI.'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', BURN_DIR_URI.'/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('swiper', BURN_DIR_URI.'/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('glightbox', BURN_DIR_URI.'/assets/vendor/glightbox/css/glightbox.min.css');
    //wp_enqueue_style('aos', BURN_DIR_URI.'/assets/vendor/aos/aos.css');

    wp_enqueue_style('variables', BURN_DIR_URI.'/assets/css/variables.css');
    wp_enqueue_style('main', BURN_DIR_URI.'/assets/css/main.css');

}

public function register_scripts () {
    wp_enqueue_script('bootstrap-js', BURN_DIR_URI.'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', true);
    wp_enqueue_script('swiper-js', BURN_DIR_URI.'/assets/vendor/swiper/swiper.bundle.min.js', true);
    wp_enqueue_script('glightbox-js', BURN_DIR_URI.'/assets/vendor/glightbox/js/glightbox.min.js', true);
    wp_enqueue_script('aos-js', BURN_DIR_URI.'/assets/vendor/aos/aos.js', true);
    wp_enqueue_script('validate-js', BURN_DIR_URI.'/assets/vendor/php-email-form/validate.js', true);    
  
    
    
    wp_enqueue_script('main-js', BURN_DIR_URI.'/assets/js/main.js', true);   
}
    
}