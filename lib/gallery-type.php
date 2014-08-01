<?php
/*
Custom type for featured galleries and taxonomies for media
*/

add_action( 'init', 'ultra_add_gallery_type');
function ultra_add_gallery_type() {
  register_post_type( 'featured-gallery',
    array('labels' => array(
      'name' => __('Featured Galleries', 'ultra'), /* This is the Title of the Group */
      'singular_name' => __('Featured Gallery', 'ultra'), /* This is the individual type */
      'all_items' => __('All Featured Galleries', 'ultra'), /* the all items menu item */
      'add_new' => __('Add New', 'ultra'), /* The add new menu item */
      'add_new_item' => __('Add New Featured Gallery', 'ultra'), /* Add New Display Title */
      'edit' => __( 'Edit', 'ultra' ), /* Edit Dialog */
      'edit_item' => __('Edit Featured Gallery', 'ultra'), /* Edit Display Title */
      'new_item' => __('New Featured Gallery', 'ultra'), /* New Display Title */
      'view_item' => __('View Featured Gallery', 'ultra'), /* View Display Title */
      'search_items' => __('Search Featured Gallery', 'ultra'), /* Search Custom Type Title */
      'not_found' =>  __('No featured galleries found', 'ultra'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('No featured galleries found in the trash', 'ultra'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of labels */
      'description' => __( 'Image featured galleries for the photos section', 'ultra' ), /* Custom Type Description */
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


  // Register the gallery year
  register_taxonomy( 'gallery_year',
    array('attachment'),
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => __( 'Gallery Year', 'ultra' ), /* name of the custom taxonomy */
        'menu_name' => __( 'Gallery Years', 'ultra' ), /* name of the custom taxonomy */
        'singular_name' => __( 'Gallery Year', 'ultra' ), /* single taxonomy name */
        'search_items' =>  __( 'Search Gallery Years', 'ultra' ), /* search title for taxomony */
        'all_items' => __( 'All Gallery Years', 'ultra' ), /* all title for taxonomies */
        'parent_item' => __( 'Parent Gallery Year', 'ultra' ), /* parent title for taxonomy */
        'parent_item_colon' => __( 'Parent Gallery Year:', 'ultra' ), /* parent taxonomy title */
        'edit_item' => __( 'Edit Gallery Year', 'ultra' ), /* edit custom taxonomy title */
        'update_item' => __( 'Update Gallery Year', 'ultra' ), /* update title for taxonomy */
        'add_new_item' => __( 'Add New Gallery Year', 'ultra' ), /* add new title for taxonomy */
        'new_item_name' => __( 'New Gallery Year Name', 'ultra' ) /* name title for taxonomy */
      ),
      'show_admin_column' => true,
      'show_ui' => true,
      'query_var' => true,
    )
  );
  register_taxonomy_for_object_type('year', 'attachment');


  // Register the bib number taxonomy
  register_taxonomy( 'bib_number',
    array('attachment'),
    array(
      'hierarchical' => false,    /* if this is false, it acts like tags */
      'labels' => array(
        'name' => __( 'Bib Numbers', 'ultra' ), /* name of the custom taxonomy */
        'singular_name' => __( 'Bib Number', 'ultra' ), /* single taxonomy name */
        'search_items' =>  __( 'Search Bib Numbers', 'ultra' ), /* search title for taxomony */
        'all_items' => __( 'All Bib Numbers', 'ultra' ), /* all title for taxonomies */
        'parent_item' => __( 'Parent Bib Number', 'ultra' ), /* parent title for taxonomy */
        'parent_item_colon' => __( 'Parent Bib Number:', 'ultra' ), /* parent taxonomy title */
        'edit_item' => __( 'Edit Bib Number', 'ultra' ), /* edit custom taxonomy title */
        'update_item' => __( 'Update Bib Number', 'ultra' ), /* update title for taxonomy */
        'add_new_item' => __( 'Add New Bib Number', 'ultra' ), /* add new title for taxonomy */
        'new_item_name' => __( 'New Bib Number Name', 'ultra' ) /* name title for taxonomy */
      ),
      'show_admin_column' => true,
      'show_ui' => false,
      'query_var' => true,
    )
  );
  register_taxonomy_for_object_type('bib_number', 'attachment');
}

function ultra_get_gallery_years($latest = false) {
  $args = array(
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'DESC',
  );

  if ($latest) {
    $args['number'] = 1;
    $latest_year = get_terms('gallery_year', $args);
    return $latest_year ? $latest_year[0] : null;
  }

  return get_terms('gallery_year', $args);
}
