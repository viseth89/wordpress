<?php 

function simple_theme_setup(){
  // Adds featured image support in posts
  add_theme_support('post-thumbnails');

  // Add Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt length = The lenth of the post that is displayed
function set_excerpt_length(){
  return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

//Widget Locations
function init_widgets($id){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id'   => 'sidebar',
    'before_widget' => '<div class="side-widget">',
    'after_widget'  => '</div>',
    'before_title'  =>  '<h3>',
    'after_title'   =>  '</h3>'
  ));
}

add_action('widgets_init', 'init_widgets');