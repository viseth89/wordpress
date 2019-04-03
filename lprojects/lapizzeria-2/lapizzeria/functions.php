 <?php
  // 1. include 'wp_head()' within php block in 'header.php' 
 function lapizzeria_styles() {
  // adding stylesheets

  /* 
  1.  1st paramater = Name of Stylesheet, 2nd Paramater = Path of Stylesheet, 3rd parameter pass in dependencies (optional), 4th Version #
  2.  Normalize CSS = Display elements universally amongst browsers
  3.  Here we pass normalize into our style.css as a dependency 'array('normalize')
  */
  wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0' );
  wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7' );
  
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style('style');

  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

  wp_enqueue_script('jquery');
  wp_enqueue_script('script');

 }

  // Hook the style, 1st Parameter = , 2nd Parameter = function 
 add_action('wp_enqueue_scripts', 'lapizzeria_styles');


/*  Add Menus
1.  Allows custom menu's to be created
2.  Will show Menu's in "Appearance" in wp Admin Panel


*/

function lapizzeria_menus() {
 register_nav_menus(array(
  /*
  1st Parameter = Name given to Menu : 2nd Parameter = Readable Name with '__' outside parenthesis, 3rd Parameter (optional) = domain name
  */
  'header-menu' => __('Header Menu', 'lapizzeria'),
  'social-menu' => __('Social Menu', 'lapizzeria')
 ) );
  
}

add_action('init', 'lapizzeria_menus');