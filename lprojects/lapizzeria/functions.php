<?php

function lapizzeria_styles(){
  // Adding stylesheets

  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0' );
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );
  // passed in dependency for style/normalize

  // Enqueue the style

  wp_enqueue_style('normalize');
  wp_enqueue_style('style');

}
//php hook to add css
add_action('wp_enqueue_scripts', 'lapizzeria_styles');


// Add Menus
function lapizzeria_menus() {
  register_nav_menus(array(
    // name given to menu => more readable presentable name , text domain arguement
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('Social Menu', 'lapizzeria')
  ));
}

// php hook -> init is a hook that will run when wp initializes
add_action('init', 'lapizzeria_menus');