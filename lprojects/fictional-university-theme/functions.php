<?php

function university_files() {
  // Load JS File
  // if we replace version number with 'microtime()' it'll refresh/relead 
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  // Load css file
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());

  // CSS version of not caching files
  // wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());

}

add_action('wp_enqueue_scripts', 'university_files');
//  First arguement what does wordpress do
//  Second arguement function that we want wordpress to run (name of function that we create) 

// This will add title for each page 
function university_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');