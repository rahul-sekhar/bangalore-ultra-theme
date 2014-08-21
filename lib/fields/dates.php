<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_dates',
    'title' => 'Dates',
    'fields' => array (
      array (
        'key' => 'field_53f57adddb8d1',
        'label' => 'Dates',
        'name' => 'dates',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options',
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
