<aside class="columns1-3 sidebar">
    <h1>Sidebar</h1>

    <!-- Check if sidebar is available -->
    <?php 
    if (is_active_sidebar('blog_sidebar')) :
      dynamic_sidebar('blog_sidebar');
    endif;
    ?>
</aside> 