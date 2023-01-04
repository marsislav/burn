<h2>
    <?php if (!is_single() || !is_page()) { ?>
    <a href="<?php echo esc_url(get_permalink())?>">
        <?php } ?>
        <?php the_title();?>
        <?php if (!is_single() || !is_page()) {?></a><?php }?>
</h2>
<?php if (is_single() || is_page()) {
the_content();

wp_link_pages(
    [
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'burn' ),
        'after'  => '</div>',
    ]
);

}?>