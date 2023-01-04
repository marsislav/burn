<?php
/*Register menus
@package Burn
*/

namespace Burn_Theme\Inc;
use BURN_THEME\Inc\Traits\Singleton;
class Menus {
    use Singleton;

    protected function __construct() {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
    //actions and filters
    add_action( 'init', [$this, 'register_menus']);
   
}

public function register_menus () {
    register_nav_menus([
        'burn-header-menu'=>esc_html__('Header menu','burn'),
        'burn-footer-menu'=>esc_html__('Footer menu','burn'),
    ]
    );
}
}