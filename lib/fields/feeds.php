<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_feeds',
    'title' => 'Feeds',
    'fields' => array (
      array (
        'key' => 'field_5411706bbc4b0',
        'label' => 'Feed 1 Title',
        'name' => 'feed_1_title',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_5411708abc4b1',
        'label' => 'Feed 1 ID',
        'name' => 'feed_1_id',
        'type' => 'text',
        'instructions' => 'Enter the facebook page id here. For example, for a page with the url: https://facebook.com/mypage, enter mypage here.',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_541170d4bc4b2',
        'label' => 'Feed 2 Title',
        'name' => 'feed_2_title',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_541170e9bc4b3',
        'label' => 'Feed 2 ID',
        'name' => 'feed_2_id',
        'type' => 'text',
        'instructions' => 'Enter the facebook page id here. For example, for a page with the url: https://facebook.com/mypage, enter mypage here.',
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
          'value' => 'acf-options-feeds',
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
