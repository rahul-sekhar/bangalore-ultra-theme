<?php
foreach(get_field('sections') as $section) {
  if ($section['visible']) {
    echo '<section id="' . sanitize_title($section['title']) . '">';
    echo '<header><h3>' . $section['title'] . '</h3></header>';
    echo $section['content'];
    echo '</section>';
  }
}
?>