<nav class="page">
  <p class="title"><?php the_title(); ?></p>
  <ul>
  <?php foreach(get_field('sections') as $section) :
    if ($section['visible'] && $section['title']) :
    ?>
      <li>
        <a href="#<?php echo sanitize_title($section['title']); ?>">
          <?php echo $section['title']; ?>
        </a>
      </li>
    <?php
    endif;
  endforeach; ?>
  </ul>
</nav>