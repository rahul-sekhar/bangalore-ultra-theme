<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_page-fields',
    'title' => 'Page Fields',
    'fields' => array (
      array (
        'key' => 'field_53d0d550217d7',
        'label' => 'Show navigation',
        'name' => 'show_navigation',
        'type' => 'true_false',
        'message' => '',
        'default_value' => 1,
      ),
      array (
        'key' => 'field_53d0d4543ef21',
        'label' => 'Sections',
        'name' => 'sections',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_53d0d4853ef23',
            'label' => 'Visible',
            'name' => 'visible',
            'type' => 'true_false',
            'column_width' => '',
            'message' => '',
            'default_value' => 1,
          ),
          array (
            'key' => 'field_53d0d4723ef22',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'formatting' => 'html',
            'maxlength' => '',
          ),
          array (
            'key' => 'field_53d0d4943ef24',
            'label' => 'Content',
            'name' => 'content',
            'type' => 'wysiwyg',
            'column_width' => '',
            'default_value' => '',
            'toolbar' => 'full',
            'media_upload' => 'yes',
          ),
        ),
        'row_min' => 1,
        'row_limit' => '',
        'layout' => 'row',
        'button_label' => 'Add Section',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'default',
          'order_no' => 1,
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
