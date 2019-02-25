<!-- This can be used as a template page under 'Pages' -> Page Attributes -->
<?php

/*
* Template Name: Our Specialties
*/

get_header();
?>


<?php while (have_posts()): the_post(); ?>
<!-- Inline style only used for example and as Reference!!!! -->
<div class="hero" style='background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)  ;'>
    <div class="hero-content">
        <div class="hero-text">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</div>

<div class="main-content container">
    <main class="text-center content-text">
        <?php the_content(); ?>
    </main>
</div>
<?php endwhile; ?>


<div class="our-specialties container">
    <h3 class="primary-text">
        Pizzas
    </h3>
    <div class="container-grid">
        <?php
        $args = array(
          'post_type' => 'specialties',
          'posts_per_page' => 10,
          'orderyby' => 'title',
          'order' => 'ASC',
          'category_name' =>  'pizzas'
        );
        $pizzas = new Wp_Query($args);
        while ($pizzas->have_posts()): $pizzas->the_post(); ?>

        <div class="columns2-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("specialties") ?>
                <h4>
                    <?php the_title() ?>
                    <span>$
                        <?php the_field('price'); ?>
                    </span>
                </h4>
                <?php the_content(); ?>
            </a>
        </div>

        <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>

    <h3 class="primary-text">
        Others
    </h3>
    <div class="container-grid">
        <?php
        $args = array(
          'post_type' => 'specialties',
          'posts_per_page' => 10,
          'orderyby' => 'title',
          'order' => 'ASC',
          'category_name' =>  'others'
        );
        $pizzas = new Wp_Query($args);
        while ($pizzas->have_posts()): $pizzas->the_post(); ?>

        <div class="columns2-4">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("specialties") ?>
                <h4>
                    <?php the_title() ?>
                    <span>$
                        <?php the_field('price'); ?>
                    </span>
                </h4>
                <?php the_content(); ?>
            </a>
        </div>

        <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>

</div>

<?php
get_footer();
?> 