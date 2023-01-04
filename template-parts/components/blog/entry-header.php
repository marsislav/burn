<?php 
/*
Template for post entry header
* @package burn 
*/
$the_post_id=get_the_ID();
$has_post_thumbnail=get_the_post_thumbnail($the_post_id);
?>
<?php if (!is_single() || !is_page()) {?>
<a href="<?php echo esc_url(get_permalink());?>">
    <?php }?>
    <?php if($has_post_thumbnail) {?>
    <?php the_post_custom_thumbnail($the_post_id, '', [
        /*'sizes'=>'(max-width:590px) 590px, 425px',*/
        'class'=>'img-fluid'
    ]);?>
    <?php } else {  _e("No thumbnail image!", 'burn');} ?>
    <?php if (!is_single() || !is_page()) {?>
</a>
<?php } ?>