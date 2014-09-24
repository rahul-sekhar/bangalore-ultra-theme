<?php $start = get_query_var('front_page')->sections['start']; ?>
<a href="#" id="scroll-button">
  <span class="arrow"
    <?php $start->point('feeds', 0); ?>="transform:rotate(0deg);"
    <?php $start->point('feeds', 1); ?>="transform:rotate(180deg);"
  ></span>
</a>