<?php
/*
Custom type for maps
*/

add_action( 'init', 'ultra_add_map_type');
function ultra_add_map_type() {
  register_post_type( 'map',
    array('labels' => array(
      'name' => __('Maps', 'ultra'), /* This is the Title of the Group */
      'singular_name' => __('Map', 'ultra'), /* This is the individual type */
      'all_items' => __('All Maps', 'ultra'), /* the all items menu item */
      'add_new' => __('Add New', 'ultra'), /* The add new menu item */
      'add_new_item' => __('Add New Map', 'ultra'), /* Add New Display Title */
      'edit' => __( 'Edit', 'ultra' ), /* Edit Dialog */
      'edit_item' => __('Edit Map', 'ultra'), /* Edit Display Title */
      'new_item' => __('New Map', 'ultra'), /* New Display Title */
      'view_item' => __('View Map', 'ultra'), /* View Display Title */
      'search_items' => __('Search Map', 'ultra'), /* Search Custom Type Title */
      'not_found' =>  __('No maps found', 'ultra'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('No maps found in the trash', 'ultra'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of labels */
      'description' => __( 'Image maps for the photos section', 'ultra' ), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
      'has_archive' => false,
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title')
    ) /* end of options */
  ); /* end of register post type */
}
