<?php

function video_path($filename) {
  echo get_template_directory_uri() . '/assets/videos/' . $filename;
}

function image_path($filename) {
  echo get_template_directory_uri() . '/assets/img/' . $filename;
}