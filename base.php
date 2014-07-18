<?php get_template_part('templates/layout/head'); ?>
  <body <?php body_class(); ?>>

  <?php
  do_action('get_header');
  get_template_part('templates/layout/header');
  ?>

  <div id="wrapper">
    <?php include roots_template_path(); ?>
  </div>

  <?php get_template_part('templates/layout/footer'); ?>

  </body>
</html>
