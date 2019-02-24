<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <!-- Required to add stylesheet to Theme -->
    <?php wp_head(); ?>

</head>

<body>
    <!-- Escape function added to home url -->
    <header class="site-header">
      <div class="container">
      <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Logo" class='logoimage'>
            </a>

        </div> <!-- Logo -->

        <!-- Adding Menu/Navigation -->
        <!-- Social Menu -->
        <!-- Menus Generally Use an array format -->
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
            </div> <!-- Social Menu -->
            <div class="address">
                <p>8179 Avenue, Mountain View, CA 94043</p>
                <p>Phone Number +1 92-456-7890</p>
            </div>
        </div><!-- Header Information-->
      </div><!-- Container -->
    </header>

    <!-- Adding Menu/Navigation -->
    <!-- Main Menu -->
    <div class="main-menu">
                <div class="mobile-menu">
                  <a href="#" class="mobile"><i class="fa fa-bars"></i>Menu</a>
                </div>


        <div class="navigation container">
            <?php
            $args = array(
              'theme_location'  => 'header-menu',
              'container'       => 'nav',
              'container_class' => 'site-nav'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div>
    <!-- End of Menu/Navigation --> 