<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_page-sections',
    'title' => 'Page Sections',
    'fields' => array (
      array (
        'key' => 'field_524f9bdb96faf',
        'label' => 'Sections',
        'name' => 'sections',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_524f9bf596fb0',
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
            'key' => 'field_524f9bfc96fb1',
            'label' => 'Visible',
            'name' => 'visible',
            'type' => 'true_false',
            'column_width' => '',
            'message' => '',
            'default_value' => 1,
          ),
          array (
            'key' => 'field_524f9c0896fb2',
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
      array (
        'key' => 'field_524ff8a763cec',
        'label' => 'Include Social Links',
        'name' => 'include_social_links',
        'type' => 'true_false',
        'message' => '',
        'default_value' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'sectioned_page.php',
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