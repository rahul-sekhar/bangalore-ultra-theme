<?php
/*
Template Name: Gallery page
*/
while (have_posts()) : the_post();
$ultra_gallery = new Ultra_Gallery(get_query_var('gallery-year'), get_query_var('show'), 60, get_query_var('pageno'));
?>
<div id="gallery">
  <h2>Gallery</h2>

  <div id="filters">
    <ul class="year">
    <?php foreach($ultra_gallery->get_all_years() as $year) { ?>
      <?php if ($ultra_gallery->is_current($year)) { ?>
        <li class="current"><?php echo $year->name ?></li>
      <?php } else { ?>
        <li>
          <a href="/gallery/<?php echo $year->slug ?>"><?php echo $year->name ?></a>
        </li>
      <?php } ?>
    <?php } ?>
    </ul>

    <?php
    if ($ultra_gallery->is_valid()) {
    ?>
    <ul class="show <?php echo $ultra_gallery->get_filter_type() ?>">
      <li class="featured">
        <?php if ($ultra_gallery->get_filter_type() == 'featured') { ?>
          Featured
        <?php } else { ?>
          <a href="<?php echo $ultra_gallery->get_path(); ?>">Featured</a>
        <?php } ?>
      </li>
      <li class="all">
        <?php if ($ultra_gallery->get_filter_type() == 'all') { ?>
          All
        <?php } else { ?>
          <a href="<?php echo add_query_arg('show', 'all', $ultra_gallery->get_path()); ?>">All</a>
        <?php } ?>
      </li>
      <li class="bib-number">
        <a href="#">Find yourself</a>
        <form action="<?php echo $ultra_gallery->get_path() ?>">
          <input name="show" placeholder="Search by bib number" value="<?php echo $ultra_gallery->get_bib_number() ?>" />
          <button type="submit" class="submit">
            <span>Search</span><i class="icon-search"></i>
          </button>
        </form>
      </li>
    </ul>
    <?php
    }
    ?>
  </div>

  <div id="images">
  <?php
  $widths = array(1600, 1280, 1024, 800, 400);
  foreach($ultra_gallery->get_images() as $image) {
  ?>
    <a class="thumb" href="<?php echo $image['url']; ?>" target="_blank"
      <?php
        foreach($widths as $width) {
          echo ' data-w' . $width . '="' . $image['sizes']['w' . $width] . '"';
        }
      ?> data-width="<?php echo $image['width'] ?>" data-height="<?php echo $image['height'] ?>">
      <img src="<?php image_path('clear.gif') ?>" data-src="<?php echo $image['sizes']['gallery-thumb'] ?>" alt="" />
      <noscript>
        <img src="<?php echo $image['sizes']['gallery-thumb'] ?>" alt="" />
      </noscript>
    </a>
  <?php
  }
  ?>
  </div>

  <div id="pagination">
  <?php
  $page_numbers = $ultra_gallery->get_pagination_numbers();
  $prev_page = null;
  if ($page_numbers) {
    if ($ultra_gallery->prev_page()) {
      echo '<a class="prev" href="' . $ultra_gallery->get_page_path($ultra_gallery->prev_page()) . '">Prev</a>';
    }

    foreach($page_numbers as $pagenum) {
      if ($prev_page && ($pagenum - $prev_page > 1)) {
        echo '<span class="seperator">&middot;</span>';
        echo "\n";
      }
      $prev_page = $pagenum;
      if ($pagenum == $ultra_gallery->curr_page()) {
        echo '<span class="current">' . $pagenum . '</span>';
      } else {
        echo '<a href="' . $ultra_gallery->get_page_path($pagenum) . '">' . $pagenum . '</a>';
      }
      echo "\n";
    }

    if ($ultra_gallery->next_page()) {
      echo '<a class="next" href="' . $ultra_gallery->get_page_path($ultra_gallery->next_page()) . '">Next</a>';
    }
  }
  ?>
  </div>
</div>
<?php
endwhile;
?>
