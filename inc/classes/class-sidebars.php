<?php
/*Sidebars 
@package Burn
*/

namespace Burn_Theme\Inc;
use BURN_THEME\Inc\Traits\Singleton;
class Sidebars {
    use Singleton;

    protected function __construct() {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
    //actions and filters
        add_action( 'widgets_init', [$this, 'register_sidebars'] );
}

public function register_sidebars() {

    register_sidebar(
        [
            'name'          => esc_html__( 'Main sidebar', 'burn' ),
            'id'            => 'sidebar-1',
            'description'   => 'Main sidebar',
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__( 'Footer sidebar', 'burn' ),
            'id'            => 'sidebar-2',
            'description'   => 'Footer sidebar',
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ]
    );

}
}