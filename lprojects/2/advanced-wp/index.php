<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <h1>
        <a href="index.html"><?php bloginfo('name'); ?></a>
        <small><?php bloginfo('description'); ?></small>
      </h1>

      <div class="h_right">
        <form method='get' action="<?php esc_url(home_url('/')); ?>">
          <input type="text" name="s" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>

  <nav class="nav main-nav">
    <div class="container">
      <!-- Menu Creation -->
      <?php
        $args=array(
          'theme_location' => 'primary'
        );
      ?>

      <?php wp_nav_menu($args); ?>
    </div>
  </nav>

  <div class="container content">
    <div class="main block">

      <article class="post">
        <h2>Blog post 1</h2>
        <p class="meta">Posted at 11:00 on May 9 by admin</p>
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa  magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
        <p>quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore</p>

        <a href="#" class="button">Read More</a>
      </article>

      <article class="post">
          <h2>Blog post 1</h2>
          <p class="meta">Posted at 11:00 on May 9 by admin</p>
          <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa  magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
          <p>quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore</p>
  
          <a href="#" class="button">Read More</a>
        </article>

        <article class="post">
            <h2>Blog post 1</h2>
            <p class="meta">Posted at 11:00 on May 9 by admin</p>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa  magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
            <p>quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore</p>
    
            <a href="#" class="button">Read More</a>
          </article>

    </div>

    <div class="side">
      <div class="block">
        <h3>Sidebar Head</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque facere assumenda eveniet ad debitis ratione aliquam, ut at cum sed!</p>
        <a href="#" class="button">More</a>
      </div>
    </div>
  </div>

  <footer class="main-footer">
    <div class="container">
      <div class="f_left">
        <p>&copy; 2019 - Advanced WP Theme</p>
      </div>
      <div class="f_right">
          <ul>
              <li>
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="#">Services</a>
              </li>
            </ul>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>