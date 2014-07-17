<nav id="side-nav" role="navigation">
  <?php
  $ultra_main_nav = Ultra_Main_Nav::Instance();
  $ultra_main_nav->display(sanitize_title(get_the_title()));
  ?>
</nav>