<?php while (have_posts()) : the_post();
  $show_nav = get_field('show_navigation');
  if($show_nav) :
    get_template_part('templates/navigation/page');
  endif;
  ?>
  <div class="page content<?php if($show_nav) echo ' nav'; ?>">
    <?php get_template_part('templates/content/page'); ?>
  </div>
<?php endwhile; ?>
