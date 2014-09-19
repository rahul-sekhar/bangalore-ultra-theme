<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_alternate-page',
    'title' => 'Alternate page',
    'fields' => array (
      array (
        'key' => 'field_541bb81932af4',
        'label' => 'Image',
        'name' => 'alternate_page_image',
        'type' => 'image',
        'save_format' => 'object',
        'preview_size' => 'thumbnail',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-alternate-page',
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
