<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  Wondering if this is required with line 11 applied
  -->
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <h1><?php bloginfo('name'); ?></h1>
      <small><?php bloginfo('description'); ?></small>
    </div>
  </header>