<?php


function lapizzeria_styles()
{
	// Adding stylesheets
	wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(), '1.0.0');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
	// passed in dependency for style/normalize

	// Enqueue the style
	wp_enqueue_style('googlefont');

	wp_enqueue_style('style');

	wp_register_script('script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

	wp_enqueue_script('script');
	wp_enqueue_script( 'viseth', get_template_directory_uri() . '/js/viseth.js');


	// Enqueue the Javascript

}
// PHP hook to add css and js
add_action('wp_enqueue_scripts', 'lapizzeria_styles');

function my_theme_scripts_function() {




}

add_action('wp_enqueue_scripts','my_theme_scripts_function');