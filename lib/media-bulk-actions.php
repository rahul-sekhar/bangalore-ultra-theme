<?php

class Ultra_Media_Bulk_Actions {

  public function __construct() {
    if(is_admin()) {
      // admin actions/filters
      add_action('admin_footer-upload.php', array(&$this, 'admin_footer_script'));
      add_action('load-upload.php',         array(&$this, 'handle_action'));
      add_action('admin_notices',           array(&$this, 'admin_notices'));
    }
  }

  function admin_footer_script() {
    global $post_type;

    if($post_type == 'attachment') {
      ?>
        <script>
          jQuery(document).ready(function($) {
            var options = $("select[name='action'], select[name='action2']")
            $('<option>').val('rotate-cw').text('Rotate clockwise').appendTo(options);
            $('<option>').val('rotate-ccw').text('Rotate counter-clockwise').appendTo(options);
            <?php
            foreach(ultra_get_gallery_years() as $gallery_year) {
            ?>
              $('<option>').val('year-<?php echo $gallery_year->term_id ?>').text('Set Year: <?php echo $gallery_year->name ?>').appendTo(options);
            <?php
            }
            ?>
            $('<option>').val('year-').text('Remove Year').appendTo(options);
          });
        </script>
      <?php
      }
  }


  /**
   * Step 2: handle the custom Bulk Action
   *
   * Based on the post http://wordpress.stackexchange.com/questions/29822/custom-bulk-action
   */
  function handle_action() {
    // get the action
    $wp_list_table = _get_list_table('WP_Media_List_Table');  // depending on your resource type this could be WP_Users_List_Table, WP_Comments_List_Table, etc
    $action = $wp_list_table->current_action();

    if(!in_array($action, array('rotate-cw', 'rotate-ccw')) && substr($action, 0, 5) != 'year-') return;

    if (substr($action, 0, 5) == 'year-') {
      $year_id = intval(substr($action, 5));
      $action = 'year';
    }

    // make sure ids are submitted.  depending on the resource type, this may be 'media' or 'ids'
    if(isset($_REQUEST['media'])) {
      $media_ids = array_map('intval', $_REQUEST['media']);
    }
    if(empty($media_ids)) return;

    $sendback = admin_url( "upload.php" );

    $pagenum = $wp_list_table->get_pagenum();
    $sendback = add_query_arg( 'paged', $pagenum, $sendback );

    switch($action) {
      case 'year':
        if ($year_id) {
          $year_term = get_term($year_id, 'gallery_year');
          $year_name = $year_term->name;
        } else {
          $year_name = 'null';
        }

        $num_set_year = 0;
        foreach( $media_ids as $media_id ) {

          if ( !$this->perform_change_year($media_id, $year_id) )
            wp_die( __('Error changing year') );

          $num_set_year++;
        }

        $sendback = add_query_arg( array('num_set_year' => $num_set_year, 'year_set_to' => $year_name), $sendback );
        break;

      case 'rotate-cw':
        $rotated = 0;
        foreach( $media_ids as $media_id ) {
          if (!$this->perform_rotate($media_id, -90)) {
            wp_die( __('Error rotating image') );
          }

          $rotated++;
          $sendback = add_query_arg( array('rotated' => $rotated), $sendback );
        }
        break;

      case 'rotate-ccw':
        $rotated = 0;
        foreach( $media_ids as $media_id ) {
          if (!$this->perform_rotate($media_id, 90)) {
            wp_die( __('Error rotating image') );
          }

          $rotated++;
          $sendback = add_query_arg( array('rotated' => $rotated), $sendback );
        }
        break;

    }

    do_action('media_bulk_actions');

    wp_redirect($sendback);
    exit();
  }


  /**
   * Step 3: display an admin notice on the Posts page after exporting
   */
  function admin_notices() {
    global $post_type, $pagenow;

    if($pagenow == 'upload.php' && $post_type == 'attachment') {
      if (isset($_REQUEST['num_set_year']) && isset($_REQUEST['year_set_to']) && (int) $_REQUEST['num_set_year']) {
        $message = $_REQUEST['num_set_year'] . ' images';
        $year_name = $_REQUEST['year_set_to'];
        if ($year_name == 'null') {
          $message = 'Removed year from ' . $message;
        } else {
          $message .= ' set to ' . $_REQUEST['year_set_to'];
        }

        echo "<div class=\"updated\"><p>{$message}</p></div>";
      }

      if (isset($_REQUEST['rotated']) && (int) $_REQUEST['rotated']) {
        $message = 'Rotated ' . $_REQUEST['rotated'] . ' images';
        echo "<div class=\"updated\"><p>{$message}</p></div>";
      }
    }
  }

  private function perform_change_year($media_id, $year_id) {
    $result = wp_set_post_terms($media_id, $year_id, 'gallery_year');
    return is_array($result);
  }

  private function perform_rotate($media_id, $angle) {
    $media = get_post($media_id);
    $img = wp_get_image_editor( _load_image_to_edit_path( $media_id, 'full' ) );

    // Rotate
    $img->rotate($angle);

    // generate new filename
    $path = get_attached_file($media_id);
    $path_parts = pathinfo( $path );
    $filename = $path_parts['filename'];
    $suffix = time() . rand(100, 999);

    while( true ) {
      $filename = preg_replace( '/-e([0-9]+)$/', '', $filename );
      $filename .= "-e{$suffix}";
      $new_filename = "{$filename}.{$path_parts['extension']}";
      $new_path = "{$path_parts['dirname']}/$new_filename";
      if ( file_exists($new_path) )
        $suffix++;
      else
        break;
    }

    // Save full size image
    if (!$this->save_image_file($new_path, $img, $media->post_mime_type, $media_id) ) {
      return false;
    }
    update_attached_file( $media_id, $new_path );
    unset( $img );

    $this->remove_old_images( $media_id );
    $metadata = wp_generate_attachment_metadata( $media_id, $new_path );
    wp_update_attachment_metadata( $media_id, $metadata );

    return true;
  }

  private function save_image_file( $filename, $image, $mime_type, $post_id ) {
    $image = apply_filters('image_editor_save_pre', $image, $post_id);
    $saved = apply_filters('wp_save_image_editor_file', null, $filename, $image, $mime_type, $post_id);

    if ( null !== $saved )
      return $saved;

    return $image->save( $filename, $mime_type );
  }

  private function remove_old_images( $att_id ) {
    $wud = wp_upload_dir();

    $metadata = wp_get_attachment_metadata( $att_id );

    $dir_path = $wud['basedir'] . '/' . dirname( $metadata['file'] ) . '/';
    $original_path = $dir_path . basename( $metadata['file'] );

    foreach ( $metadata['sizes'] as $size => $size_info ) {
      $intermediate_path = $dir_path . $size_info['file'];

      if ( $intermediate_path == $original_path )
        continue;

      unlink( $intermediate_path );
    }
  }
}

new Ultra_Media_Bulk_Actions();