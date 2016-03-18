<header id="header" role="banner">
  <a href="<?php echo home_url('/') ?>">
    <img class="logo" src="<?php echo get_site_logo_image(get_field('header_logo', 'options'), 96); ?>" alt="Bangalore Ultra" />
    <h1><?php bloginfo('name'); ?></h1>
  </a>

  <a id="pull-nav" href="#">Menu</a>

  <!-- <a class="register" href="#">Register now!</a> -->

  <!-- <span class="dates">8 &amp; 9 Nov 2014</span> -->

  <?php get_template_part('templates/navigation/main'); ?>
</header>
