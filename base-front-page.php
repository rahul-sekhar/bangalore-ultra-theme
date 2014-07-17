<?php get_template_part('templates/layout/head', 'front-page'); ?>
  <body <?php body_class(); ?>>

  <?php get_template_part('templates/layout/header'); ?>

  <div id="wrapper">
    <?php include roots_template_path(); ?>
  </div>

  <?php get_template_part('templates/layout/footer', 'front-page'); ?>

  </body>
</html>
