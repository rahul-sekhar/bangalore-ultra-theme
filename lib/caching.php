<?php

add_action( 'admin_menu', 'ultra_caching_menu' );

// Cache menu and options hooks
function ultra_caching_menu() {
  $hook_suffix = add_object_page( 'Cache', 'Cache', 'manage_options', 'ultra-cache', 'ultra_caching_page' );
  add_option('cache_dirty', 'false');

  add_action('load-' . $hook_suffix, 'ultra_cache_action');
}

function ultra_cache_action() {
  if (!isset($_POST['clear'])) {
    return;
  }

  $response = wp_remote_request(CACHE_BAN_URL, array(
    'method' => 'BAN'
  ));

  if( is_wp_error($response) ) {
    $_POST['clear'] = 'error';
    return;
  }

  $code = (int)$response['response']['code'];
  if ($code !== 200 && $code !== 204 ) {
    $_POST['clear'] = 'error';
    return;
  }

  update_option('cache_dirty', 'false');
}


// Cache backend page
function ultra_caching_page() {
  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
?>
<div class="wrap">
  <h2>Cache</h2>

  <?php
  if (isset($_POST['clear'])) :
    if ($_POST['clear'] === 'error') : ?>
      <div id="message" class="error below-h2">
        <p>An error occured while attempting to clear the cache.</p>
      </div>
    <?php else : ?>
      <div id="message" class="updated below-h2">
        <p>The cache has been cleared.</p>
      </div>
    <?php
    endif;
  endif; ?>

  <p>The cache must be cleared when you have made changes to the content of the site. If this is not done, users may not see these changes.</p>

  <form method="post">
    <input type="hidden" name="clear" value="true" />
    <p class="submit">
      <input type="submit" name="submit" id="submit" class="button button-primary" value="Clear cache now" />
    </p>
  </form>
</div>
<?php
}

// Hooks to detect when the cache is dirty
add_action( 'save_post', 'ultra_cache_dirty' );
add_action( 'acf/save_post', 'ultra_cache_dirty' );
add_action( 'delete_post', 'ultra_cache_dirty' );
add_action( 'add_attachment', 'ultra_cache_dirty' );
add_action( 'edit_attachment', 'ultra_cache_dirty' );
add_action( 'media_bulk_actions', 'ultra_cache_dirty' );

function ultra_cache_dirty() {
  update_option('cache_dirty', 'true');
}

// Admin bar notification for cache
add_action( 'admin_bar_menu', 'cache_notification', 999 );

function cache_notification( $wp_admin_bar ) {
  if( get_option('cache_dirty') !== 'true' ) {
    return;
  }

  $title = 'Updates may not be visible';
  $args = array(
    'id'    => 'cache-notification',
    'title' => '<span class="ab-icon dashicons-info"></span><span class="ab-label">' . $title . '</span>',
    'href'  => '/wp-admin/admin.php?page=ultra-cache',
    'meta'  => array(
      'title' => $title
    )
  );
  $wp_admin_bar->add_node( $args );
}

add_action( 'admin_init', 'ultra_cache_styles');

function ultra_cache_styles() {
  if (WP_ENV === 'development') {
    $assets = array(
      'css'           => '/assets/css-dev/caching.css',
    );
  } else {
    $get_assets = file_get_contents(get_template_directory() . '/assets/manifest.json');
    $assets     = json_decode($get_assets, true);
    $assets     = array(
      'css'           => '/assets/css/caching.css' . '?' . $assets['assets/css/caching.css']['hash'],
    );
  }
  wp_register_style ('caching', get_stylesheet_directory_uri() . $assets['css'], false, null);
  wp_enqueue_style( 'caching' );
}