<?php 
/*Main template file. 
@package Burn
*/ 
?>
<?php get_header();?>
<main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">

                    <?php single_post_title();?>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <?php get_template_part( '/template-parts/post-grid');?>
    <?php get_sidebar(); ?>
</main><!-- End #main -->




</div>
<?php get_footer();?>