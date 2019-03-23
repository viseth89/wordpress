<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="page">
        <header id='masthead' class='site-header' role='banner'>
            <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg " alt="">
                    </a>
                </div>
            </div>
            <!--.container -->
        </header>

        <div class="container content">

        </div> 