<!-- page.php for pages -->
<?php get_header(); ?>

<div id='primary' class='primary post-<?php the_ID(); ?>'>
    <?php 
    // While loop
    while (have_posts()) : the_post();
      ?>

      <h2><?php the_title(); ?></h2>

      <?php the_content() ?>

      <h1>From page.php</h1>

    <?php endwhile; ?>
</div> 


<?php get_footer(); ?>