<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <?php wp_head() ?>
</head>

<body>

    <header class="site-header ">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
                </a>
            </div> <!-- .logo -->

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
                      // link_before and link_after are crucial for styling and screen-reader
                    );
                    wp_nav_menu($args)
                    ?>
                </div>
                <div class="address">
                    <p>8179 Bay Avenue, Mountain View, CA 94043</p>
                    <p>Phone Number: +1-92-456-7890</p>
                </div>
            </div>
        </div> <!-- .container -->
    </header>

    <!-- WP Menu -->
    <div class="main-menu">
      <div class="mobile-menu">
        <a href="#" class="fa fa-bars">Menu</a>
      </div>

        <div class="navigation container">
            <?php 
            $args = array(
              'theme_location'  =>  'header-menu',
              'container'       =>  'nav',
              'container_class' =>  'site-nav'
            );
            // Use function 'wp_nav_menu()' and pass in $args/array
            wp_nav_menu($args)
            ?>
        </div>
    </div> 