<?php $lastBlog=new WP_query('type=post&posts_per_page=1'); if ($lastBlog->have_posts()){ while($lastBlog->have_posts()) { $lastBlog->the_post();?>
<?php 
    $the_post_id=get_the_ID();
    $has_post_thumbnail=get_the_post_thumbnail($the_post_id);
    ?>

<div class="post-entry-1 lg">
    <a href="<?php the_permalink();?>">
        <?php if($has_post_thumbnail) {?>
        <?php the_post_custom_thumbnail($the_post_id, '', [
        /*'sizes'=>'(max-width:590px) 590px, 425px',*/
        'class'=>'img-fluid'
    ]);?>
        <?php } else {  _e("No thumbnail image!", 'burn');} ?>
    </a>
    <div class="post-meta"><span class="date"><?php the_category(' , ');?></span> <span class="mx-1">•</span> <span>Jul
            5th
            '22</span></div>
    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <p class="mb-4 d-block"><?php the_content();?></p>

    <div class="d-flex align-items-center author">
        <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
        <div class="name">
            <h3 class="m-0 p-0">Cameron Williamson</h3>
        </div>
    </div>
</div>

<?php 
    }
}
wp_reset_postdata();
    ?>