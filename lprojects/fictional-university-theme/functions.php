<?php

function university_files() {
  // Load css file
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');
//  First arguement what does wordpress do
//  Second arguement function that we want wordpress to run (name of function that we create) 