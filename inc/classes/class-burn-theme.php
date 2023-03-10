<?php
/*@package Burn  */
namespace BURN_THEME\Inc;

use BURN_THEME\Inc\Traits\Singleton;

class BURN_THEME {
    use Singleton;

    protected function __construct() {
        //load class
        Assets::get_instance();
        Menus::get_instance();
        Sidebars::get_instance();
        Block_Patterns::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks() {
    //actions
add_action('after_setup_theme', [ $this, 'setup_theme']);
    }
    public function setup_theme() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text'=>['site-title', 'site-description'],
            'height'=>150,
            'width'=>400,
            'flex-height'=>true,
            'flex-width'=>true,
        ]);
        add_theme_support('custom-background', [
            'default-color'=>'#fff',
            'default-image'=>''
        ]);

        add_theme_support('post-thumbnails');

        /**
		 * Register image sizes.
		 */
		add_image_size( 'featured-thumbnail', 350, 233, true );


        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('automatic-feed-links');

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style'
        ]);
        
    
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_editor_style('assets/css/editor.css');

        /*Remove core block patterns */
        remove_theme_support('core-block-patterns');

        if (!isset($content_width)){
            $content_width=1280;
        }
        
        
}

}