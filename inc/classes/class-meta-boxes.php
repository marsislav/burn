<?php
/*Register Metaboxes
@package Burn
*/

namespace Burn_Theme\Inc;
use BURN_THEME\Inc\Traits\Singleton;
class Meta_Boxes {
    use Singleton;

    protected function __construct() {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
    //actions
    add_action( 'add_meta_boxes',[
        $this, 
        'add_custom_meta_box'
    ]);
 
}

public function add_custom_meta_box() {
    
}
    
}