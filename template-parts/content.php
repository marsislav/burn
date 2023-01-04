<?php
/*Content template.
@package burn */
?>
<div <?php post_class('post-entry-1');?> id="post-<?php the_ID();?>">
    <?php get_template_part('template-parts/components/blog/entry-header');?>
    <?php get_template_part('template-parts/components/blog/entry-meta');?>
    <?php get_template_part('template-parts/components/blog/entry-content');?>
</div>