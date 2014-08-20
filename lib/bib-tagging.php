<?php

class BibTagging {
  function __construct() {
    add_action('admin_init', array(&$this, 'admin_init'));
    add_action('admin_menu', array(&$this, 'admin_menu'));
  }

  function admin_init() {
    if (WP_ENV === 'development') {
      $assets = array(
        'css'           => '/assets/css-dev/bib-tagging.css',
        'js'            => '/assets/js/bib-tagging.js',
      );
    } else {
      $get_assets = file_get_contents(get_template_directory() . '/assets/manifest.json');
      $assets     = json_decode($get_assets, true);
      $assets     = array(
        'css'           => '/assets/css/bib-tagging.css' . '?' . $assets['assets/css/bib-tagging.css']['hash'],
        'js'            => '/assets/js/bib-tagging.min.js' . '?' . $assets['assets/js/bib-tagging.min.js']['hash'],
      );
    }

    // Add styles and script
    wp_register_script( 'images-loaded', get_stylesheet_directory_uri() . '/assets/js/plugins/imagesloaded.pkgd.min.js', array(), '3.0.4' );
    wp_register_script( 'bib-tagging', get_template_directory_uri() . $assets['js'], array( 'jquery', 'images-loaded' ), null);
    wp_register_style ('bib-tagging', get_stylesheet_directory_uri() . $assets['css'], false, null);

    add_action('load-media_page_bib-tagging', array(&$this, 'add_script_and_style') );

    // Add ajax actions
    add_action('wp_ajax_get_gallery_image', array(&$this, 'get_gallery_image'));
    add_action('wp_ajax_save_bib_tags', array(&$this, 'save_bib_tags'));

    // Add options
    add_option('ultra_bib_tagging_gallery_year', null);
    add_option('ultra_bib_tagging_photo_no', 1);
    add_option('ultra_bib_tagging_image_size', 'w1024');
  }

  function admin_menu() {
    add_media_page(
      __('Tag Bib Numbers', 'ultra'),
      __('Tag Bib Numbers', 'ultra'),
      'read',
      'bib-tagging',
      array(&$this, 'page')
    );
  }

  function page() {
    ?>
    <div class="wrap">
      <div id="bib-tagging-start">
        <h2>Tag Bib Numbers</h2>'

        <p class="message"></p>

        <table class="form-table">
          <tr>
            <th scope="row">Gallery year</th>
            <td>
              <select id="gallery-year">
              <?php
              $selected_year = get_option('ultra_bib_tagging_gallery_year');
              foreach(ultra_get_gallery_years() as $gallery_year) {
              ?>
                <option<?php if ($selected_year === $gallery_year->term_id) echo ' selected ="selected"'; ?> value="<?php echo $gallery_year->term_id; ?>"><?php echo $gallery_year->name; ?></option>
              <?php
              }
              ?>
              </select>
            </td>
          </tr>

          <tr>
            <th scope="row">Photo to start with</th>
            <td><input type="text" id="photo-no" class="small-text" value="<?php echo get_option('ultra_bib_tagging_photo_no'); ?>" /></td>
          </tr>

          <tr>
            <th scope="row">Image quality</th>
            <td>
              <select id="image-size">
              <?php
              $selected_size = get_option('ultra_bib_tagging_image_size');
              $sizes = array(
                'w400' => '400 pixel max width',
                'w800' => '800 pixel max width',
                'w1024' => '1024 pixel max width',
                'w1280' => '1280 pixel max width',
                'w1600' => '1600 pixel max width',
                'full' => 'original size'
              );
              foreach($sizes as $size => $size_name) {
              ?>
                <option<?php if ($selected_size === $size) echo ' selected ="selected"'; ?> value="<?php echo $size; ?>"><?php echo $size_name; ?></option>
              <?php
              }
              ?>
              </select>
            </td>
          </tr>
        </table>

        <p class="submit">
          <button id="tag-button" class="button button-primary">Start Tagging</button>
        </p>
      </div>

      <div id="bib-tagging-container">
        <p class="photo-info"><span class="photo-no"></span><span class="loading"></span></p>

        <div class="tagging-section">
          <a href="#" class="prev icon-left-open-big"></a>
          <input type="text" id="bib-tags" />
          <a href="#" class="save icon-ok-circled"></a>
          <a href="#" class="next icon-right-open-big"></a>
        </div>
        <a href="#" class="back icon-cancel"></a>

        <div class="image-area"></div>
        <div class="preload-area"></div>

        <p class="help">Use lower quality images to speed things up. If you click on the image, the original high quality one will load in a new tab</p>

        <p class="help">Separate bib tags with commas or plus symbols</p>

        <p class="help">
          <strong>Keyboard shortcuts:</strong><br />
          Enter &ndash; save tags and go to the next photo<br />
          A &ndash; back to previous photo<br />
          S &ndash; skip to next photo<br />
        </p>
      </div>
    </div>
    <?php
  }

  function add_script_and_style() {
    wp_enqueue_script( 'bib-tagging' );
    wp_enqueue_style( 'bib-tagging' );
  }

  function save_bib_tags() {
    $year_id = (int)$_POST['year'];
    $n = (int)$_POST['n'];
    $tags = $_POST['tags'];

    $image_query = $this->gallery_image_query($year_id, $n);
    $image = $image_query->get_posts();

    if ($image) {
      $image = $image[0];
      wp_set_post_terms($image->ID, $tags, 'bib_number');
      echo '1';
    } else {
      echo '0';
    }
    die();
  }

  function get_gallery_image() {
    $year_id = (int)$_GET['year'];
    $n = (int)$_GET['n'];
    $size = $_GET['size'];

    // Save the image being accessed to options
    update_option('ultra_bib_tagging_gallery_year', $year_id);
    update_option('ultra_bib_tagging_photo_no', $n);

    if (in_array($size, array('w600', 'w800', 'w1024', 'w1280', 'w1600', 'full'))) {
      update_option('ultra_bib_tagging_image_size', $size);
    } else {
      $size = 'full';
    }

    $image_query = $this->gallery_image_query($year_id, $n, array('posts_per_page' => 3));
    $images = $image_query->get_posts();

    if ($images) {
      $main_image = $images[0];
      $src = wp_get_attachment_image_src($main_image->ID, $size);
      $full_src = wp_get_attachment_image_src($main_image->ID, 'full');
      $preload = array();

      foreach($images as $i => $image) {
        if ($i == 0) continue;

        $preload_src = wp_get_attachment_image_src($image->ID, $size);
        $preload[$n + $i] = $preload_src[0];
      }

      echo json_encode(array(
        'src' => $src[0],
        'full_src' => $full_src[0],
        'tags' => ultra_get_term_list($main_image, 'bib_number', ','),
        'n' => $n,
        'total' => $image_query->found_posts,
        'preload' => $preload
      ));
      die();
    } else {
      echo 0;
    }

    die();
  }

  private function gallery_image_query($year_id, $n, $args = array()) {
    $n = max($n, 1) - 1;

    $defaults = array(
      'post_type' => 'attachment',
      'post_status' => 'inherit',
      'posts_per_page' => 1,
      'offset' => $n,
      'orderby' => 'title',
      'tax_query' => array(
        array(
          'taxonomy' => 'gallery_year',
          'field' => 'id',
          'terms' => $year_id
        )
      )
    );

    $args = array_merge($defaults, $args);
    $image_query = new WP_Query($args);

    return $image_query;
  }
}

if ( is_admin() ) {
  new BibTagging();
}