<!-- This is the about-us template, we get the name of the file from the slug of the page -->
<?php get_header(); ?>

<!-- similar to sql = "select * from "  -->
<!-- similar to django while/for loop -->
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

<div class="box-information container clear">
    <div class="single-box">
        <!-- 
        We are taking the image from the custom field,
        Configuring the function we created with image size
        Using plugin to regenerate the images for this function
        passing the image into the image tag after its been altered
    -->
        <?php
        $id_image = get_field('image_1');
        $image = wp_get_attachment_image_src($id_image, 'boxes');
        ?>

        <img src="<?php echo $image[0]; ?>" alt="">
        <div class="content-box">
            <?php echo the_field('Description_1'); ?>

        </div>
    </div>
    <div class="single-box">
        <!-- 
        We are taking the image from the custom field,
        Configuring the function we created with image size
        Using plugin to regenerate the images for this function
        passing the image into the image tag after its been altered
    -->
        <?php
        $id_image = get_field('image_2');
        $image = wp_get_attachment_image_src($id_image, 'boxes');
        ?>

        <img src="<?php echo $image[0]; ?>" alt="">
        <div class="content-box">
            <?php echo the_field('Description_2'); ?>

        </div>
    </div>
    <div class="single-box">
        <!-- 
        We are taking the image from the custom field,
        Configuring the function we created with image size
        Using plugin to regenerate the images for this function
        passing the image into the image tag after its been altered
    -->
        <?php
        $id_image = get_field('image_3');
        $image = wp_get_attachment_image_src($id_image, 'boxes');
        ?>

        <img src="<?php echo $image[0]; ?>" alt="">
        <div class="content-box">
            <?php echo the_field('Description_3'); ?>

        </div>
    </div>
</div>



<?php endwhile; ?>








<?php get_footer(); ?> 