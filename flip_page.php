<?php
/*
Template Name: Flippable page
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="page content">
    <?php get_template_part('templates/content/flip_page'); ?>
  </div>
<?php endwhile; ?>
