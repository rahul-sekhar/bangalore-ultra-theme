<?php

class UltraMainNav {
  private $loaded_nav = array();

  public static function Instance() {
    static $inst = null;
    if ($inst === null) {
      $inst = new UltraMainNav();
    }
    return $inst;
  }

  /* Constructs menu data */
  private function __construct() {
    $pages = get_pages(array(
      'sort_column' => 'menu_order'
    ));

    foreach ($pages as $page) {
      // Skip the home page
      if (get_post_meta($page->ID, '_wp_page_template', true) == 'home-template.php') {
        continue;
      }

      $loaded_item = array(
        'title' => $page->post_title,
        'url' => get_permalink($page->ID),
        'class' => sanitize_title($page->post_title)
      );

      $sections = get_field('sections', $page->ID);

      if ($sections) {
        $loaded_item['sub_items'] = array();

        if (get_field('include_social_links', $page->ID)) {
          $loaded_item['sub_items'][] = array(
            'function' => 'ultra_get_nav_social_links',
            'class' => 'social-links'
          );
        }

        foreach($sections as $section) {
          if ($section['visible']) {
            $loaded_item['sub_items'][] = array(
              'title' => $section['title'],
              'url' => $loaded_item['url'] . '#' . sanitize_title($section['title'])
            );
          }
        }
      }

      $this->loaded_nav[] = $loaded_item;
    } // end page loop
  }

  /* Displays the navigation menu */
  function display($current = null) {
    $output = '<ul>';

    // Add home link
    // $output .= '<li class="home-link ' . (('home' == $current) ? ' current' : '') . '"><a href="'. home_url() . '">Home</a></li>';

    foreach ($this->loaded_nav as $i => $item) {
      $output .= "\n";
      $output .= '<li' . (($current && $item['class'] == $current) ? ' class="current"' : '') . '>';
      $output .= '<a href="' . $item['url'] . '">' . $item['title'] . '</a>';

      if (isset($item['sub_items'])) {
        $output .= '<ul>';
        foreach($item['sub_items'] as $sub_item) {
          if (isset($sub_item['function'])) {
            $output .= '<li' . (isset($sub_item['class']) ? ' class="' . $sub_item['class'] . '"' : '') . '>' . call_user_func($sub_item['function']) . '</li>';
          } else {
            $output .= '<li><a href="' . $sub_item['url'] . '">' . $sub_item['title'] . '</a></li>';
          }
        }
        $output .= '</ul>';
      }

      $output .= '</li>';
    } // end nav item loop

    $output .= '</ul>';
    echo $output;
  }

  /* Returns the maximum number of sub items in the menu */
  function get_max_height() {
    $max = 0;

    foreach ( $this->loaded_nav as $item ) {
      if (isset($item['sub_items'])) {
        $count = count($item['sub_items']);
        if ($count > $max) {
          $max = $count;
        }
      }
    }

    return $max;
  }


  /* Returns all the sub-items for a particular template */
  function get_subitems($page_title) {
    $nav_item = $this->get_nav_item( $page_title );
    if ($nav_item) {
      return $nav_item['sub_items'];
    } else {
      return array();
    }
  }

  /* Returns the loaded navigation item for a particular template */
  private function get_nav_item($page_title) {
    foreach( $this->loaded_nav as $item ) {
      if ( $item['title'] == $page_title ) {
        return $item;
      }
    }
    return false;
  }
}

function ultra_get_nav_social_links() {
  $output = "";
  $output .= '<a href="https://facebook.com/' . get_field('facebook_page_name', 'options') . '" target="_blank" class="icon-facebook"></a> ';
  $output .= '<a href="https://twitter.com/' . get_field('twitter_page_name', 'options') . '" target="_blank" class="icon-twitter"></a>';
  return $output;
}
?>