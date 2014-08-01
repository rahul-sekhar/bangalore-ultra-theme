<?php

function clean_shortcode_content($content) {
  // $output = $content;

  // // Remove starting closing p tags
  // $output = preg_replace('/\A\s*<\/p>/i', '', $output);

  // // Remove ending opening p tags
  // $output = preg_replace('/<p>\s*\z/i', '', $output);

  // // Replace starting br with opening p tag if present
  // $output = preg_replace('/\A\s*<br \/>/i', '<p>', $output);

  // // Replace ending br with closing p tag if present
  // $output = preg_replace('/<br \/>\s*\z/i', '</p>', $output);

  // return $output;

  $content = do_shortcode( shortcode_unautop( $content ) );
  $content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
  return $content;
}


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


function container_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'title' => '',
  ), $atts ));

  $output = '<div class="item-container">';
  $output .= '<div class="title"><p>' . $title . '</p></div>';
  $output .= '<div class="contents">' . do_shortcode(clean_shortcode_content($content)) . '</div></div>';
  return $output;
}
add_shortcode('container', 'container_shortcode');


function item_shortcode($atts, $content) {
  $output = '<div class="item>' + clean_shortcode_content($content) . '</div>';
  return $output;
}
add_shortcode('item', 'item_shortcode');


function hideable_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'title' => 'Expand'
  ), $atts ));

  $output = '<div class="hideable">';
  $output .= '<p class="title">' . $title . '</p>';
  $output .= '<div class="contents">' . do_shortcode(clean_shortcode_content($content)) . '</div></div>';
  return $output;
}
add_shortcode('hideable', 'hideable_shortcode');


/* shortcode of this form: [map name="Map name"] */
function sharan_map_shortcode( $atts ) {
  extract( shortcode_atts( array(
    'name' => null,
  ), $atts ) );

  $output = '';

  global $post;
  $post = get_page_by_title( $name, 'OBJECT', 'map' );
  if ($post) : setup_postdata( $post );
    ob_start();
    get_template_part('templates/components/map');
    $output = ob_get_clean();
  endif;
  wp_reset_postdata();

  return $output;
}
add_shortcode( 'map', 'sharan_map_shortcode' );