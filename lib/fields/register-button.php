<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_register-button',
    'title' => 'Register button',
    'fields' => array (
      array (
        'key' => 'field_5406df8183b09',
        'label' => 'Text',
        'name' => 'register_text',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5406df9983b0a',
        'label' => 'Link',
        'name' => 'register_link',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5406dfa783b0b',
        'label' => 'Enabled',
        'name' => 'register_enabled',
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
          'value' => 'acf-options-register-button',
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
