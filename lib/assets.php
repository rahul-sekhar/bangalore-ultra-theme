<?php

function video_path($filename) {
  return get_template_directory_uri() . '/assets/videos/' . $filename;
}