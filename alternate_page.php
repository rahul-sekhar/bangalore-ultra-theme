<?php $image = get_field('alternate_page_image', 'options'); ?>
<img id="alt" src="<?php echo $image['url']; ?>" />

<nav class="alt-nav">
  <?php wp_nav_menu(); ?>
</nav>
