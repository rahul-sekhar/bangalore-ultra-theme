<?php $start = get_query_var('front_page')->sections['start']; ?>
<a href="#" id="scroll-button"
  <?php $start->point('feeds', 0); ?>="opacity: 1;"
  <?php $start->point('feeds', 1); ?>="opacity: 0;"
></a>