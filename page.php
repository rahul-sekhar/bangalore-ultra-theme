<?php get_template_part('templates/navigation/side'); ?>

<?php while (have_posts()) : the_post(); ?>
  <div class="page content">
    <?php get_template_part('templates/content/page'); ?>
  </div>
<?php endwhile; ?>
