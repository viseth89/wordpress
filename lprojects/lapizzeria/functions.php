<?php 

function lapizzeria_styles() {
  // Adding Stylesheets
  // Linked with 'header.php' #9

  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0' );
  // Passing in normalize to Style
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );



  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('style');
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
    'header-menu' => __("Header Menu", 'lapizzeria')
  ));
}

// init is hook that runs as soon as wordpress 'initializes'
add_action('init', 'lapizzeria_menus');