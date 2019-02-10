<?php get_header(); ?>
  
<div class="container">
    <div class="main">
    
      <?php if(have_posts()) : ?>

        <article class="post">
          <?php while(have_posts()): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
              </div>
            <?php endif; ?>

            <?php the_content(); ?>
            <br>
          <?php endwhile; ?>
        </article>

      <?php else : ?>
        <?php echo wpautop('Sorry, No posts were found'); ?>
      <?php endif; ?>

    </div>



<?php get_footer(); ?>