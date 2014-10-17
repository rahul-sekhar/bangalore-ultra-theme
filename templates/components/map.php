<?php
$map_bg = get_field('map_background');
$map_color = get_field('map_background_color');
if ($map_bg['height']) {
  $ratio = $map_bg['width'] / $map_bg['height'];
} else {
  $ratio = 0;
}
$labels = get_field('map_labels');
$routes = get_field('routes');
?>
<div class="small-map">
  <img class="bg" style="background-color: <?php echo $map_color; ?>" src="<?php echo $map_bg['sizes']['map_thumb']; ?>" alt="" />
  <?php foreach($routes as $route) : ?>
    <img class="route" src="<?php echo $route['route_image']['sizes']['map_thumb']; ?>" alt="" />
  <?php endforeach; ?>

  <div class="overlay">
    <p>View map</p>
  </div>
</div>

<div class="full-map" style="background-color: <?php echo $map_color; ?>" data-ratio="<?php echo $ratio ?>">
  <a href="#" class="icon-cancel close"></a>

  <div class="wrapper">
    <img class="bg" src="<?php echo $map_bg['url']; ?>" alt="" />

    <?php
    if($labels) : foreach($labels as $label) :
    ?>
    <div class="label" style="left: <?php echo $label['position_x']; ?>%; top: <?php echo $label['position_y']; ?>%;">
      <p><span><?php echo $label['text']; ?></span></p>
    </div>
    <?php
    endforeach; endif;
    ?>

    <?php
    if($routes) : foreach($routes as $route) :
    ?>
    <div class="<?php echo 'route-' . sanitize_title($route['name']); ?> route">
      <img src="<?php echo $route['route_image']['url']; ?>" alt="" />

      <?php
      foreach($route['markers'] as $marker) :
      ?>
      <div class="point" style="left: <?php echo $marker['position_x']; ?>%; top: <?php echo $marker['position_y']; ?>%;">
        <div class="balloon<?php if($marker['position_y'] > 50) echo ' up'; ?>"><?php echo $marker['balloon_text']; ?></div>
      </div>
      <?php
      endforeach;

      foreach($route['u-turns'] as $uturn) :
      ?>
      <div class="u-turn" style="left: <?php echo $uturn['position_x']; ?>%; top: <?php echo $uturn['position_y']; ?>%;">
        <span class="text"><i class="icon-cw"></i><?php echo $uturn['text']; ?></span>
      </div>
      <?php
      endforeach;
      ?>
    </div>
    <?php
    endforeach; endif;
    ?>
  </div>

  <?php
  if($routes && sizeof($routes) > 1) :
  ?>
    <div class="options">
      <p>View route</p>
      <ul>
      <?php
      foreach($routes as $route) :
      ?>
        <li><a href="#" data-route-class="<?php echo 'route-' . sanitize_title($route['name']); ?>"><?php echo $route['name']; ?></a></li>
      <?php
      endforeach;
      ?>
      </ul>
    </div>
  <?php
  endif;
  ?>
</div>
