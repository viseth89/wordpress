<?php
/* 
Plugin Name: Gourmet Artistry Post Types & Taxonomies
Plugin URI:
Description: Add Custom Post Types to stie.
Version: 1.0
Author: Viseth Sen ( Juan De la torre Valdez )
License: GPL2
License URI: https:ww.gnuy.org/licenses/gpl-2.0.html
*/
// 0 is priority
add_action('init', 'ga_recipe_post_type', 0);
add_action('init', 'ga_events_post_type', 0);

// Create custom post type
function ga_recipe_post_type() {

  $labels = array(
  'name'                        => _x( 'Recipes', 'Post Type General Name', 'gourmet-artist'),
  'singular_name'               => _x( 'Recipe', 'Post Type Singular Name', 'gourmet-artist'),
  'menu_name'                   => __( 'Recipes', 'gourmet-artist'),
  'parent-item-colon'           => __( 'Parent Recipe', 'gourmet-artist'),
  'all_items'                   => __( 'All Recipes', 'gourmet-artist'),
  'view_item'                   => __( 'View Recipe', 'gourmet-artist'),
  'add_new_item'                => __( 'Add New Recipe', 'gourmet-artist'),
  'add_new'                     => __( 'Add New Recipe', 'gourmet-artist'),
  'edit_item'                   => __( 'Edit Recipe', 'gourmet-artist'),
  'update_item'                 => __( 'Update Recipe', 'gourmet-artist'),
  'search_items'                => __( 'Search Recipe', 'gourmet-artist'),
  'not_found'                   => __( 'Not Found', 'gourmet-artist'),
  'not_found_in_trash'          => __( 'Not found in trash', 'gourmet-artist'),

  );
// More Customizations
  $args = array(
    'label'   =>  __('Recipes', 'gourmet-artist' ),
    'description' =>  __('Recipes for Gourmet Artistry', 'gourmet-artist'),
    'labels'    =>    $labels,
    'supports'  =>    array('title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
    'hierarchical'  =>  false,
    'public'      =>  true,
    'show_ui'     =>  true,
    'show_in_menus' =>  true,
    "show_in_nav_menus" => true,
    'show_in_admin_bar' =>  true,
    'menu_position'   => 5,
    'menu_icon' => 'dashicons-admin-page', 
    'can_export'  => true,
    'has_archive' =>  'true',
    'exclude_from_search' => false,
    'capability_type' =>  'page',


  );
  // Register the Post TYpe
  register_post_type('recipes', $args);
}


// Create custom post type
function ga_events_post_type() {

  $labels = array(
  'name'                        => _x( 'Events', 'Post Type General Name', 'gourmet-artist'),
  'singular_name'               => _x( 'Event', 'Post Type Singular Name', 'gourmet-artist'),
  'menu_name'                   => __( 'Events', 'gourmet-artist'),
  'parent-item-colon'           => __( 'Parent Event', 'gourmet-artist'),
  'all_items'                   => __( 'All Events', 'gourmet-artist'),
  'view_item'                   => __( 'View Recipe', 'gourmet-artist'),
  'add_new_item'                => __( 'Add New Event', 'gourmet-artist'),
  'add_new'                     => __( 'Add New Event', 'gourmet-artist'),
  'edit_item'                   => __( 'Edit Event', 'gourmet-artist'),
  'update_item'                 => __( 'Update Event', 'gourmet-artist'),
  'search_items'                => __( 'Search Event', 'gourmet-artist'),
  'not_found'                   => __( 'No Events Found', 'gourmet-artist'),
  'not_found_in_trash'          => __( 'Not found in trash', 'gourmet-artist'),

  );
// More Customizations
  $args = array(
    'label'   =>  __('Events', 'gourmet-artist' ),
    'description' =>  __('Events for Gourmet Artistry', 'gourmet-artist'),
    'labels'    =>    $labels,
    'supports'  =>    array('title', 'editor',),
    'hierarchical'  =>  false,
    'public'      =>  true,
    'show_ui'     =>  true,
    'show_in_menus' =>  true,
    "show_in_nav_menus" => true,
    'show_in_admin_bar' =>  true,
    'menu_position'   => 6,
    'menu_icon' => 'dashicons-calendar-alt', 
    'can_export'  => true,
    'has_archive' =>  'true',
    'exclude_from_search' => false,
    'capability_type' =>  'page',


  );
  // Register the Post TYpe
  register_post_type('events', $args);
}


?>