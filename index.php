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
    <?php if ( have_posts() ) { ?>
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?php
				while ( have_posts() ) : the_post();?>

                        <div class="col-lg-6">
                            <?php get_template_part( 'template-parts/content' );?>
                        </div>

                        <?php endwhile;?>
                    </div>
                </div>
                <div class="col-lg-4">Sidebar</div>
            </div>
        </div>
    </section>
    <?php } else { get_template_part( 'template-parts/content' );}?>

</main><!-- End #main -->
<?php get_footer();?>