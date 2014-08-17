<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_sponsors',
    'title' => 'Sponsors',
    'fields' => array (
      array (
        'key' => 'field_53f0e18b94aec',
        'label' => 'Sponsors',
        'name' => 'sponsors',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_53f0e3a26d7a3',
            'label' => 'Name',
            'name' => 'name',
            'type' => 'text',
            'required' => 1,
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_53f0e1b494aed',
            'label' => 'Logo',
            'name' => 'logo',
            'type' => 'image',
            'required' => 1,
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_53f0e1c394aee',
            'label' => 'URL',
            'name' => 'url',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'none',
            'maxlength' => '',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add sponsor',
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
