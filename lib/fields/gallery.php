<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_gallery-fields',
    'title' => 'Gallery fields',
    'fields' => array (
      array (
        'key' => 'field_5223fc45a4b35',
        'label' => 'Year',
        'name' => 'gallery-year',
        'type' => 'taxonomy',
        'required' => 1,
        'taxonomy' => 'gallery_year',
        'field_type' => 'select',
        'allow_null' => 0,
        'load_save_terms' => 0,
        'return_format' => 'id',
        'multiple' => 0,
      ),
      array (
        'key' => 'field_522172957b602',
        'label' => 'Images',
        'name' => 'images',
        'type' => 'gallery',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'featured-gallery',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
