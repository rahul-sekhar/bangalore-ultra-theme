<?php
// Add rewrite rule and query args for gallery filters
function ultra_add_gallery_query_vars( $vars ){
  $vars[] = "gallery-year";
  $vars[] = "show";
  $vars[] = "pageno";
  return $vars;
}
add_filter( 'query_vars', 'ultra_add_gallery_query_vars' );

function ultra_add_gallery_rewrite_rules($rules) {
  $newRules = array(
    'gallery/([\d]+)/?$' => 'index.php?pagename=gallery&gallery-year=$matches[1]',
    'featured-gallery/([\d]+)/?$' => 'index.php?pagename=gallery&gallery-year=$matches[1]'
  );
  $rules = $newRules + $rules;
  return $rules;
}
add_filter('rewrite_rules_array', 'ultra_add_gallery_rewrite_rules');

// Add image thumbnail size for gallery
add_action( 'after_setup_theme', 'ultra_gallery_thumbnail');
function ultra_gallery_thumbnail() {
  add_image_size( 'gallery-thumb', 300, 300, true );
}


// Gallery page class
class Ultra_Gallery {
  private $_year, $_show, $_featured_images, $_query, $_per_page, $_page;

  /* Constructor function */
  public function __construct($year, $show, $per_page, $page) {
    $this->_show = $show;
    $this->_per_page = intval($per_page);
    $this->_page = $page ? intval($page) : 1;

    // Get the year term
    if ($year) {
      $this->_year = get_term_by('slug', $year, 'gallery_year');
    }

    // Use the latest year if the year is not present
    if (!$this->_year) {
      $this->_year = ultra_get_gallery_years(true);
    }

    // Get the featured gallery if required
    if ($this->get_filter_type() == 'featured') {
      $this->_featured_images = $this->get_featured_images();
    } else {
      $this->_query = $this->get_query();
    }
  }

  /* Compare a year against the current gallery year */
  public function is_current($year) {
    return $year == $this->_year;
  }

  /* Check if the gallery was found */
  public function is_valid() {
    return (bool)$this->_year;
  }

  /* Get the galleries filtered images */
  public function get_images() {
    if (!$this->is_valid()) {
      return array();
    }

    /* Featured gallery images*/
    if ($this->get_filter_type() == 'featured') {
      return array_slice($this->_featured_images, ($this->_page - 1) * $this->_per_page, $this->_per_page);
    }

    /* Get images from query if not featured */
    $images = $this->_query->get_posts();
    return array_map(array($this, 'get_image_data'), $images);
  }

  /* Get the filter type */
  public function get_filter_type() {
    if ($this->_show == 'all') {
      return 'all';
    } elseif (!$this->_show) {
      return 'featured';
    } else {
      return 'bib-number';
    }
  }

  /* Get the bib number if any */
  public function get_bib_number() {
    if ($this->_show == 'all') {
      return null;
    } else {
      return $this->_show;
    }
  }

  /* Get the path of the current gallery */
  public function get_path() {
    if ($this->is_valid()) {
      return '/gallery/' . $this->_year->slug;
    } else {
      return '/gallery';
    }
  }

  /* Get path for a page of the current filtered gallery */
  public function get_page_path($page) {
    $path = $this->get_path() . '?';
    if ($this->_show) {
      $path .= 'show=' . $this->_show . '&';
    }
    $path.= 'pageno=' . $page;
    return $path;
  }

  /* Get the page numbers to show */
  public function get_pagination_numbers() {
    $last_page = $this->get_last_page();

    // Return false if there are no pages
    if (!$last_page) {
      return false;
    }

    // Page numbers around the current page
    $adjacent_pages = $this->range(max(1, $this->_page - 2), min($last_page, $this->_page + 2));

    // Add every tenth page
    if ($last_page > 10 && $last_page < 20) {
      $mid_pages = array(10);
    } else {
      $mid_pages = $this->range(10, $last_page, 10);
    }

    // Add the first, tenth and last pages
    $extreme_pages = array(1, $last_page);

    // Remove duplicates and sort the numbers
    $page_numbers = array_unique(array_merge($adjacent_pages, $mid_pages, $extreme_pages));
    sort($page_numbers);
    return $page_numbers;
  }

  public function prev_page() {
    if ($this->_page > 1) {
      return $this->_page - 1;
    } else {
      return null;
    }
  }

  public function next_page() {
    if ($this->_page < $this->get_last_page()) {
      return $this->_page + 1;
    } else {
      return null;
    }
  }

  /* Get all years */
  public function get_all_years() {
    return ultra_get_gallery_years();
  }

  /* Get current page */
  public function curr_page() {
    return $this->_page;
  }

  private function get_last_page() {
    return (int)ceil($this->num_images() / $this->_per_page);
  }

  /* Gets a range of numbers, returning an empty array if the step size exceeds the range */
  private function range($start, $end, $step = 1) {
    if ($end - $start < $step) {
      return array();
    } else {
      return range($start, $end, $step);
    }
  }

  /* Returns the total number of images */
  private function num_images() {
    if ($this->get_filter_type() == 'featured') {
      return count($this->_featured_images);
    } else {
      return $this->_query->found_posts;
    }
  }

  /* Form the query */
  private function get_query() {
    if (!$this->is_valid()) {
      return null;
    }

    if ($this->get_bib_number()) {
      $bib_number = get_term_by('name', $this->get_bib_number(), 'bib_number');

      $tax_query = array(
        'relation' => 'AND',
        array(
          'taxonomy' => 'gallery_year',
          'field' => 'id',
          'terms' => $this->_year->term_id
        ),
        array(
          'taxonomy' => 'bib_number',
          'field' => 'id',
          'terms' => $bib_number ? $bib_number->term_id : null
        )
      );
    } else {
      $tax_query = array(
        array(
          'taxonomy' => 'gallery_year',
          'field' => 'id',
          'terms' => $this->_year->term_id
        )
      );
    }

    $args = array(
      'post_type' => 'attachment',
      'post_status' => 'inherit',
      'posts_per_page' => $this->_per_page,
      'offset' => ($this->_page - 1) * $this->_per_page,
      'orderby' => 'title',
      'tax_query' => $tax_query
    );

    return new WP_Query($args);
  }

  /* Get the correct featured gallery */
  private function get_featured_images() {
    if (!$this->is_valid()) {
      return null;
    }

    $galleries = get_posts(array(
      'post_type' => 'featured-gallery',
      'posts_per_page' => 1,
      'meta_key' => 'gallery-year',
      'meta_value' => $this->_year->term_id
    ));

    if ($galleries) {
      return get_field('images', $galleries[0]->ID);
    } else {
      return array();
    }
  }

  private function get_image_data($attachment) {
    $data = array(
      'id'      =>  $attachment->ID,
      'alt'     =>  get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
      'title'     =>  $attachment->post_title,
      'caption'   =>  $attachment->post_excerpt,
      'description' =>  $attachment->post_content,
      'mime_type'   =>  $attachment->post_mime_type,
    );

    // find all image sizes
    $image_sizes = get_intermediate_image_sizes();

    if( strpos($data['mime_type'], 'image') !== false ) {
      // is image
      $src = wp_get_attachment_image_src( $data['id'], 'full' );

      $data['url'] = $src[0];
      $data['width'] = $src[1];
      $data['height'] = $src[2];


      // sizes
      if( $image_sizes )
      {
        $data['sizes'] = array();

        foreach( $image_sizes as $image_size )
        {
          // find src
          $src = wp_get_attachment_image_src( $data['id'], $image_size );

          // add src
          $data['sizes'][ $image_size ] = $src[0];
          $data['sizes'][ $image_size . '-width' ] = $src[1];
          $data['sizes'][ $image_size . '-height' ] = $src[2];
        }
        // foreach( $image_sizes as $image_size )
      }
      // if( $image_sizes )
    }
    else
    {
      // is file
      $src = wp_get_attachment_url( $data['id'] );

      $data['url'] = $src;
    }

    // return value
    return $data;
  }
}
