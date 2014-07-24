<?php

function video_path($filename) {
  $url = relative_path(get_template_directory_uri() . '/assets/videos/' . $filename);
  echo $url;
}

function image_path($filename) {
  $url = relative_path(get_template_directory_uri() . '/assets/img/' . $filename);
  echo $url;
}

function relative_path($url) {
  if(function_exists('soil_root_relative_url')) :
    return soil_root_relative_url($url);
  else :
    return $url;
  endif;
}