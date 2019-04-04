<!-- This is the template for Pages -->
<?php 
get_header();
?>

<!-- 
1.  Initially called image in loop 
2.  Set css to background image (done here vs in css for example and concepts);
3.  must be echo 'get_the_post_thumbnail_url()'


 -->
<?php while (have_posts()) : the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="hero-content">
    <div class="hero-text">
    <?php 
    // the_post_thumbnail() 
    ?>

    <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>


<div class="main-content container">
  <div class="text-center content-text">
  <p><?php the_content(); ?> </p>
  </div>
</div>


<?php endwhile; ?>
<h1>Hello from page.php</h1>

<?php 
get_footer();
?> 