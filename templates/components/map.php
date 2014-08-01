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
$widths = array(1600, 1280, 1024, 800, 400);
?>
<div class="small-map">
  <img class="bg" style="background-color: <?php echo $map_color; ?>" src="<?php echo $map_bg['sizes']['w800']; ?>" alt="" />
  <?php foreach($routes as $route) : ?>
    <img class="route" src="<?php echo $route['route_image']['sizes']['w800']; ?>" alt="" />
  <?php endforeach; ?>

  <div class="overlay">
    <p>View map</p>
  </div>
</div>

<div class="full-map" style="background-color: <?php echo $map_color; ?>">
  <a href="#" class="icon-cancel close"></a>

  <div class="wrapper">
    <div class="inner" data-ratio="<?php echo $ratio ?>">
      <div class="picture main background"
        <?php
          echo ' data-wfull="' . $map_bg['url'] . '"';
          foreach($widths as $width) :
            echo ' data-w' . $width . '="' . $map_bg['sizes']['w' . $width] . '"';
          endforeach;
        ?>>
      </div>

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
        <div class="picture background"
          <?php
            echo ' data-wfull="' . $route['route_image']['url'] . '"';
            foreach($widths as $width) :
              echo ' data-w' . $width . '="' . $route['route_image']['sizes']['w' . $width] . '"';
            endforeach;
          ?>>
          </div>

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

    <div class="options">
      <p>View route</p>
      <ul>
      <?php
      if($routes) : foreach($routes as $route) :
      ?>
        <li><a href="#" data-route-class="<?php echo 'route-' . sanitize_title($route['name']); ?>"><?php echo $route['name']; ?></a></li>
      <?php
      endforeach; endif;
      ?>
      </ul>
    </div>
  </div>
</div>