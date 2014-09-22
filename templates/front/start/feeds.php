<?php $start = get_query_var('front_section'); ?>

<div class="feeds"
  <?php $start->point('feeds', 0); ?>="left: -100%;"
  <?php $start->point('feeds', 1); ?>="left: 0%;"
  data-marker="<?php echo $start->raw_point('feeds', 1); ?>"
>

  <div id="feeds"></div>

</div>