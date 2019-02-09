<?php 

function simple_theme_setup(){
  // Adds featured image support in posts
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');

// Excerpt length = The lenth of the post that is displayed
function set_excerpt_length(){
  return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');