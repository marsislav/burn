<?php
$author_id=get_the_author_meta('ID');
$author_display=get_the_author();

?>

<div class="d-flex align-items-center author">
    <div class="photo"><?php echo get_avatar($author_id )?></div>
    <div class="name">
        <h3 class="m-0 p-0"><?php echo esc_html($author_display);?></h3>
    </div>
</div>