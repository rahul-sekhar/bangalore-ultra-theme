<?php

add_action( 'init', 'ultra_responsive_image_sizes');
function ultra_responsive_image_sizes() {
  add_image_size( 'w1600', 1600, 0 );
  add_image_size( 'w1280', 1280, 0 );
  add_image_size( 'w1024', 1024, 0 );
  add_image_size( 'w800', 800, 0 );
  add_image_size( 'w400', 400, 0 );
}