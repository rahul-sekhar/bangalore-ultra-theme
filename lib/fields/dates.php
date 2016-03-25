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
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_53f57adddb8d2',
        'label' => 'Event title',
        'name' => 'event_title',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-dates',
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
