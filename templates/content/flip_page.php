<h2><?php the_title(); ?></h2>
<?php
foreach(get_field('sections') as $index=>$section) :
?>
<section id="section-<?php echo $index; ?>">
  <div class="inner" data-anchor-target="#section-<?php echo $index; ?>" data-0="position:static;" data-bottom="position:fixed;bottom:0;">
    <?php echo $section['content']; ?>
  </div>
</section>
<?php
endforeach;
?>