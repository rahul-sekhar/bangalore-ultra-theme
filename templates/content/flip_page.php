<h2><?php the_title(); ?></h2>
<?php
foreach(get_field('sections') as $index=>$section) :
?>
<section>
  <?php echo $section['content']; ?>
</section>
<?php
endforeach;
?>