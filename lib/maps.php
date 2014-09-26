<?php

// Add the map thumbnail size
add_action( 'init', 'ultra_map_thumbnail_size');
function ultra_map_thumbnail_size() {
  add_image_size( 'map_thumb', 800, 0 );
}
