<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <title>Viseth Sen</title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id='bg-img'>

  <header>
    <div class="menu-btn">
      <div class="btn-line"></div>
      <div class="btn-line"></div>
      <div class="btn-line"></div>
    </div>

    <div class="menu">
      <div class="menu-branding">
        <div class="portrait">

        </div>
      </div>
      <ul class="menu-nav">
        <li class="nav-item current">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="about.html" class="nav-link">About Me</a>
        </li>
        <li class="nav-item">
          <a href="work.html" class="nav-link">My Work</a>
        </li>
        <li class="nav-item">
          <a href="contact.html" class="nav-link">How To Reach Me</a>
        </li>
      </ul>
    </div>
  </header>

  <main id="home">
    <h1 class="lg-heading">
      Viseth <span class="text-secondary">Sen</span>
    </h1>
    <h2 class="sm-heading">
      Web Developer, Programmer, Designer & Entrepreneur
    </h2>
    <div class="icons">
      <a href="#!"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="#!"><i class="fab fa-facebook fa-2x"></i></a>
      <a href="#!"><i class="fab fa-linkedin fa-2x"></i></a>
      <a href="#!"><i class="fab fa-github fa-2x"></i></a>

    </div>
  </main>
<?php wp_footer(); ?>
</body>

</html>