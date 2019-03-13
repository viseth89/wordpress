<!-- THis is where the template for front-page/home-page -->
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="hero-content">
        <div class="hero-text">
            <h2><?php echo esc_html(get_option('blogdescription')); ?></h2>
            <p><?php the_content() ?></p>

            <?php $url = get_page_by_title('About Us'); ?>
            <a class='button secondary' href="<?php echo get_permalink($url->ID); ?>">more info</a>
        </div>
    </div>
</div>
<?php endwhile; ?>

<div class="main-content container">
    <main class="container-grid clear">
        <h2 class="primary-text text-center">Our Specialties</h2>

        <?php $args = array(
            'posts_per_page' => 3,
            'post_type' =>  'specialties',
            'category_name' =>  'pizzas',
            'orderby' =>  'rand'
        );

        $specialties = new WP_Query($args);
        while ($specialties->have_posts()) : $specialties->the_post(); ?>

        <div class="specialty columns1-3">
            <div class="specialty-content">

                <?php the_post_thumbnail('specialty-portrait'); ?>

                <div class="information">
                    <?php the_title('<h3>', '</h3>'); ?>
                    <?php the_content(); ?>
                    <p class="price">$<?php the_field('price') ?></p>
                    <a href="<?php the_permalink(); ?>" class='button primary'>read more</a>
                </div>
            </div>
        </div>

        <?php endwhile;
    wp_reset_postdata(); ?>
    </main>
</div>

<section class='ingredients'>
    <div class="container">
        <div class="container-grid">
            <?php while (have_posts()) : the_post(); ?>
            <div class="columns2-4 image">
                <h3><?php the_field('ingredients') ?></h3>

               <?php the_field('ingredients_text'); ?>

                <?php $url = get_page_by_title('About Us'); ?>
                <a href="<?php echo get_permalink($url->ID); ?>" class="button primary">Read More</a>
            </div>
            <div class="columns2-4">
                <img src="<?php the_field('image') ?>" alt="Fresh Ingredients">
            </div>

            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Must add clear to clear floats!!! -->
<section class="container clear">
    <h2 class="primary-text text-center">Gallery</h2>
    <!-- Mind blown, will loook more into this get and echo -->
    <?php
        $url = get_page_by_title('Gallery');
        echo get_post_gallery($url->ID);
    ?>
</section>

<!-- Reservation Form -->
<section class="location-reservation clear">
    <div class="container-grid">
        <div class="columns2-4">
            <div id="map">

            </div>
        </div>
        <div class="columns2-4">
            <!-- Inserting custom template -->
            <!-- file is 'reservation-form', odd way to split -->
            <?php get_template_part('templates/reservation', 'form' );  ?>
        </div>
    </div>
</section>





<?php get_footer(); ?> 