<?php 

function lapizzeria_styles() {
  // Adding Stylesheets

  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '6.0.0' );
  // Passing in normalize to Style
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );



  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('style');
}

// Hook code into wordpress
add_action('wp_enqueue_scripts', 'lapizzeria_styles');


