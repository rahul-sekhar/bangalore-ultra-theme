<?php get_template_part('templates/layout/head'); ?>
  <body <?php body_class(); ?>>

    <?php
      do_action('get_header');
      get_template_part('templates/layout/header');
    ?>

    <div id="wrapper" role="document">
      <main role="main" class="container">
        <?php include roots_template_path(); ?>
      </main>
    </div><!-- /#wrapper -->

    <?php get_template_part('templates/layout/footer'); ?>

  </body>
</html>
