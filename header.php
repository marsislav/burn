<?php 
/*
Header file
@package Burn
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes( );?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <?php if(function_exists('the_custom_logo')) {
                the_custom_logo();
            } else { ?>
            <a href="/" class="logo d-flex align-items-center">

                <h1>
                    <php esc_html(bloginfo('name')); ?>
                </h1>
            </a><?php }?>

            <nav id="navbar" class="navbar">


                <ul>
                    <?php wp_nav_menu ([
                        'theme_location'=>'burn_header_menu',
                        'container_class'=>''
                    ]);?>

            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->