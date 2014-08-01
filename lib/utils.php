<?php
/**
 * Utility functions
 */
function is_element_empty($element) {
  $element = trim($element);
  return !empty($element);
}

// Tell WordPress to use searchform.php from the templates/ directory
function roots_get_search_form($form) {
  $form = '';
  locate_template('/templates/searchform.php', true, false);
  return $form;
}
add_filter('get_search_form', 'roots_get_search_form');


// Function to return a plain text list of taxonomy terms
function ultra_get_term_list($object, $taxonomy, $seperator = ', ') {
  $terms = get_the_terms($object, $taxonomy);
  if (!$terms) {
    return '';
  }
  $terms = wp_list_pluck($terms, 'name');
  return implode($terms, $seperator);
}