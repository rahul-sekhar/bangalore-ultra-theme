<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_logos',
    'title' => 'Logos',
    'fields' => array (
      array (
        'key' => 'field_56ec39193cb59',
        'label' => 'Large logo',
        'name' => 'large_logo',
        'type' => 'image',
        'instructions' => 'This is the logo image that will be shown on the loading screen. Should be 370px or more in height. For best performance make it exactly 370px in height.',
        'required' => 1,
        'save_format' => 'object',
        'preview_size' => 'full',
        'library' => 'all',
      ),
      array (
        'key' => 'field_56ec3a5f3cb5a',
        'label' => 'Header logo',
        'name' => 'header_logo',
        'type' => 'image',
        'instructions' => 'This is the logo image that is shown in the header bar. Should be at least 48px and not larger than 96px in height. For best performance make it exactly 48px in height.',
        'save_format' => 'object',
        'preview_size' => 'full',
        'library' => 'all',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-logos',
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
