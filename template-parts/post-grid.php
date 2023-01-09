<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-3">
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
                    <div class="post-meta"><span class="date"><?php the_category(' , ');?></span> <span
                            class="mx-1">•</span> <span>Jul
                            5th
                            '22</span></div>
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <p class="mb-4 d-block"><?php echo wp_trim_words(get_the_excerpt(), 40); ?></p>

                    <?php get_template_part('template-parts/components/blog/entry-footer');?>
                </div>

                <?php 
    }
}
wp_reset_postdata();
    ?>
            </div>
            <div class="col-lg-9">
                <div class="row">

                    <?php $otherBlog=new WP_query('type=post&offset=1'); if ($otherBlog->have_posts()){ while(
                                $otherBlog->have_posts()) { $otherBlog->the_post();?>
                    <div class="col-lg-4">


                        <?php get_template_part( 'template-parts/content' );?>


                    </div>
                    <?php }} wp_reset_postdata();?>
                </div>

            </div>
            <div class="aligncenter">
                <?php burn_pagination();?>
            </div>
        </div>
</section>


<?php  /*} else { get_template_part( 'template-parts/content-none' );}?*/?>