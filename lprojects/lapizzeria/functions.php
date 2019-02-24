<?php 

function lapizzeria_styles() {
  // Adding Stylesheets
  // Linked with 'header.php' #9

  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0' );
  // Font Awesome
  wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
  // Passing in normalize to Style
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('style');

  // add JavaScript files
  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );

  wp_enqueue_script('jquery');
  wp_enqueue_script('script');
}

// Hook code into wordpress
add_action('wp_enqueue_scripts', 'lapizzeria_styles');


// Add Menus
// 1. Name is added in Lower Space
// 2. Readable name
// 3. Text - Domain added (optional)
// Called in 'header.php' on #23:36

function lapizzeria_menus(){
  register_nav_menus(array(
    #1 Header Menu
    'header-menu' => __("Header Menu", 'lapizzeria'),
    #2 Social Menu (top-right)
    'social-menu' => __("Social Menu", 'lapizzeria')
  ));
}

// init is hook that runs as soon as wordpress 'initializes'
add_action('init', 'lapizzeria_menus');