<?php

// Add rewrite rule and query args
function ultra_alt_query_vars( $vars ){
  $vars[] = "alt";
  return $vars;
}
add_filter( 'query_vars', 'ultra_alt_query_vars' );

function ultra_alt_rewrite_rules($rules) {
  $newRules = array(
    'alt/?$' => 'index.php?alt=true'
  );
  $rules = $newRules + $rules;
  return $rules;
}
add_filter('rewrite_rules_array', 'ultra_alt_rewrite_rules');

function ultra_alt_template() {
  if ( get_query_var( 'alt' )) {
    add_filter( 'template_include', function() {
      return get_template_directory() . '/alternate_page.php';
    });
  }
}
add_action( 'template_redirect', 'ultra_alt_template' );

function ultra_alt_class( $classes ) {
  if ( get_query_var( 'alt' )) {
    $classes[] = 'alt';
  }
  return $classes;
}
add_filter( 'body_class', 'ultra_alt_class' );