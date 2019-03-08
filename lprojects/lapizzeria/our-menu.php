<?php 
/*
* Template Name: Our Specialties
*/
get_header(); ?>


<?php while (have_posts()) : the_post(); ?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="hero-content">
        <div class="hero-text">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>

<div class="main-content container">
    <main class="text-center content-text">
        <p><?php the_content(); ?> </p>
    </main>
</div>

<?php endwhile; ?>

<!-- Specialties Menu Selections -->
<div class="our-specialties container">
    <h3 class="primary-text"> Pizzas</h3>
    <div class="container-grid">
        <?php $args = array(
          'post_type'       =>  'specialties',
          'posts_per_page'  =>  10,
          'orderby'         =>  'title',
          'order'           =>  'ASC',
          'category_name'   =>  'pizzas'
        );
        // Query usage, note difference from while loop above
        // use of pizzas ->
        $pizzas = new WP_Query($args);
        while ($pizzas->have_posts()) : $pizzas->the_post(); ?>

        <div class="columns2-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('specialties'); ?>
                <h4><?php the_title(); ?> <span>$<?php the_field('price'); ?> </span></h4>
                <?php the_content(); ?>
            </a>
        </div>

        <?php
        // required when using query
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
</div> <!-- End of Specialties Menu Selections -->


<!-- Other Menu Selections -->

<div class="our-specialties container">
    <h3 class="primary-text"> Others</h3>
    <div class="container-grid">
        <?php $args = array(
          'post_type'       =>  'specialties',
          'posts_per_page'  =>  10,
          'orderby'         =>  'title',
          'order'           =>  'ASC',
          'category_name'   =>  'others'
        );
        // Query usage, note difference from while loop above
        // use of pizzas ->
        $pizzas = new WP_Query($args);
        while ($pizzas->have_posts()) : $pizzas->the_post(); ?>

        <div class="columns2-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('specialties'); ?>
                <h4><?php the_title(); ?> <span>$<?php the_field('price'); ?> </span></h4>
                <?php the_content(); ?>
            </a>
        </div>

        <?php
        // required when using query
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
</div> <!-- End of Other Menu Selections -->



<?php get_footer(); ?> 