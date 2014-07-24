<h2><?php the_title(); ?></h2>

<?php foreach(get_field('sections') as $section) :
  if ($section['visible']) :
  ?>
    <section id="<?php echo sanitize_title($section['title']); ?>">
      <header><h3><?php echo $section['title']; ?></h3></header>
      <?php echo $section['content']; ?>
    </section>
  <?php
  endif;
endforeach; ?>