<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>
<!-- body_class is important for styling -->
<body <?php body_class(); ?> >

    <header class="site-header">
        <div class="container">
            <div class="logo">
                <!-- Escl used, makes web-site more secure -->
                <a href=" <?php echo esc_url(home_url('/')) ?> ">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg " class='logoimage' alt="">
                </a>
            </div> <!-- End of logo -->
            <div class="header-information">
                <div class="socials">

                    <?php
                    $args = array(
                      'theme_location'  =>  'social-menu',
                      'container'       =>  'nav',
                      'container_class' =>  'socials',
                      'container_id'    =>  'socials',
                      'link_before'     =>  '<span class="sr-text">',
                      'link_after'      =>  '</span>'
                    );
                    wp_nav_menu($args);
                    ?>

                </div> <!-- end of Socials -->
                <div class="address">
                    <!-- Grab variables that were created in options.php -->
                    <!-- Information needed to be echoed to be displayed -->
                    <p> <?php echo esc_html(get_option('lapizzeria_location')); ?> </p>
                    <p>Phone Number:  <?php echo esc_html(get_option('lapizzeria_phonenumber')); ?> </p>
                </div>
            </div> <!-- end of header-information -->
        </div> <!-- end of container -->
    </header>

    <div class="main-menu">
        <div class="mobile-menu">
            <a href="#" class="mobile"><i class="fa fa-bars"></i>Menu </a>
        </div>
        <div class="container navigation">
            <?php
            $args = array(
              'theme_location'  =>  'header-menu',
              'container'       =>  'nav',
              'container_class' =>  'site-nav'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div> 