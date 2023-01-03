<?php

/*Theme functions 
@package Burn
*/

function burn_enqueue_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/css/bootstrap-icons.css');
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');
    //wp_enqueue_style('aos', get_template_directory_uri().'/assets/vendor/aos/aos.css');

    wp_enqueue_style('variables', get_template_directory_uri().'/assets/css/variables.css');
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');

    //Scripts

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', true);
    wp_enqueue_script('swiper-js', get_template_directory_uri().'/assets/vendor/swiper/swiper.bundle.min.js', true);
    wp_enqueue_script('glightbox-js', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', true);
    wp_enqueue_script('aos-js', get_template_directory_uri().'/assets/vendor/aos/aos.js', true);
    wp_enqueue_script('validate-js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', true);    
  
    
    
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', true);    

}


add_action( 'wp_enqueue_scripts', 'burn_enqueue_scripts');