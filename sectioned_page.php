<?php
/*
Template Name: Page with sections
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="page inner-container">
    <div class="page content">
      <?php get_template_part('templates/content/sectioned_page'); ?>
    </div>
  </div>
<?php endwhile; ?>
