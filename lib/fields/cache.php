<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_cache',
    'title' => 'Cache',
    'fields' => array (
      array (
        'key' => 'field_53f744fe000f6',
        'label' => 'Clear cache automatically',
        'name' => 'clear_cache_automatically',
        'type' => 'true_false',
        'message' => '',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-cache',
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
