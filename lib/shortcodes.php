<?php

function button_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'url' => '',
    'external' => 'true',
    'disabled' => ''
  ), $atts ));

  $output = '<a class="button';

  if ($disabled) {
    $output .= ' disabled"';
  } else {
    $output .= '" href="' . htmlspecialchars($url) . '"';

    if ($external !== "false") {
      $output .= ' target="_blank"';
    }
  }



  $output .= '>' . clean_shortcode_content($content) . '</a>';
  return $output;
}
add_shortcode('button', 'button_shortcode');

function hideable_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'title' => 'Expand'
  ), $atts ));

  $output = '<p class="hideable-title"><span>' . $title . '</span></p>';
  $output .= '<div class="hideable-content">' . do_shortcode(clean_shortcode_content($content)) . '</div>';
  return $output;
}
add_shortcode('hideable', 'hideable_shortcode');

function clean_shortcode_content($content) {
  $output = $content;

  // Remove starting closing p tags
  $output = preg_replace('/\A\s*<\/p>/i', '', $output);

  // Remove ending opening p tags
  $output = preg_replace('/<p>\s*\z/i', '', $output);

  // Replace starting brs with opening p tags
  $output = preg_replace('/\A\s*<br \/>/i', '<p>', $output);

  return $output;
}

?>