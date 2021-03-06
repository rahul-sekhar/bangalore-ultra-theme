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


function register_shortcode() {
  return button_shortcode(
    array(
      'url' => get_field('register_link', 'options'),
      'disabled' => !get_field('register_enabled', 'options'),
      'class' => 'register'
    ),
    get_field('register_text', 'options')
  );
}
add_shortcode('register', 'register_shortcode');


function button_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'url' => '',
    'disabled' => '',
    'class' => null
  ), $atts ));

  $output = '<a class="button';

  if ($class) {
    $output .= ' ' . $class;
  }

  if ($disabled) {
    $output .= ' disabled"';
  } else {
    $output .= '" href="' . htmlspecialchars($url) . '"';
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

function hideable_button_shortcode($atts, $content) {
  extract( shortcode_atts( array (
    'title' => 'Expand'
  ), $atts ));

  $output = '<div class="hideable">';
  $output .= '<span class="title hbutton">' . $title . '</span>';
  $output .= '<div class="contents">' . do_shortcode(clean_shortcode_content($content)) . '</div></div>';
  return $output;
}
add_shortcode('hideable_button', 'hideable_button_shortcode');


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

//Google Maps Shortcode
function ultra_googlemap_shortcode($atts, $content = null) {
   extract(shortcode_atts(array(
      'width' => '640',
      'height' => '480',
      'src' => ''
   ), $atts));
   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&amp;output=embed"></iframe>';
}
add_shortcode("googlemap", "ultra_googlemap_shortcode");
