<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_sponsors',
    'title' => 'Sponsors',
    'fields' => array (
      array (
        'key' => 'field_525165e5b923e',
        'label' => 'Sponsors Line One - Title',
        'name' => 'sponsors_title_1',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5251660eb923f',
        'label' => 'Sponsors Line One - Logos',
        'name' => 'sponsors_logos_1',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_52516631b9240',
            'label' => 'Name',
            'name' => 'name',
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
            'key' => 'field_5251666bb9241',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_5251667bb9242',
            'label' => 'Link',
            'name' => 'link',
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
        'row_min' => 1,
        'row_limit' => 6,
        'layout' => 'table',
        'button_label' => 'Add Logo',
      ),
      array (
        'key' => 'field_5251669ab9243',
        'label' => 'Sponsors Line Two - Title',
        'name' => 'sponsors_title_2',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_525166a3b9244',
        'label' => 'Sponsors Line Two - Logos',
        'name' => 'sponsors_logos_2',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_525166a3b9245',
            'label' => 'Name',
            'name' => 'name',
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
            'key' => 'field_525166a3b9246',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_525166a3b9247',
            'label' => 'Link',
            'name' => 'link',
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
        'row_min' => 1,
        'row_limit' => 6,
        'layout' => 'table',
        'button_label' => 'Add Logo',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-sponsors',
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
