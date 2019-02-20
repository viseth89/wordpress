<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
  <title>Document</title>
</head>
<body <?php body_class(); ?> > 
  <header class='w3-container w3-teal'>
    <div class="w3-row">
      <div class="w3-col m9 l9">
          <h1><?php bloginfo('name') ?></h1>
      </div>
      <div class="w3-col m3 l3">
        <input type="text" class="w3-input" placeholder='Search...'>
      </div>
    </div>
  </header>

  <div class="w3-row">
      <div class="w3-col m3 l3">
        <ul class="w3-ul">
          <li><a href="#">Nature</a></li>
          <li><a href="#">Animals</a></li>
          <li><a href="#">Objects</a></li>
          <li><a href="#">People</a></li>
          <li><a href="#">Abstract</a></li>
        </ul>
      </div>
      <div class="w3-col m9 l9">
        <div class="row">