<?php
$sections = get_field('sections');
if ($sections && sizeof($sections) > 1) : ?>

<a href="#" class="side-nav-pull"></a>

<nav class="page">
  <p class="title"><a href="#top"><?php the_title(); ?></a></p>
  <ul>
  <?php foreach($sections as $section) :
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

<?php endif; ?>