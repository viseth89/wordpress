 <?php
  // 1. include 'wp_head()' within php block in 'header.php' 
 function lapizzeria_styles() {
  // adding stylesheets

  /* 
  1.  1st paramater = Name of Stylesheet, 2nd Paramater = Path of Stylesheet, 3rd parameter pass in dependencies (optional), 4th Version #
  2.  Normalize CSS = Display elements universally amongst browsers
  3.  Here we pass normalize into our style.css as a dependency 'array('normalize')





  */
  wp_register_style('normalize', get_template_directory_uri() . 'css/normalize.css', array(), '1.0' );
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('style');

 }

  // Hook the style, 1st parameter = , 2nd parameter = function 
 add_action('wp_enqueue_scripts', 'lapizzeria_styles');