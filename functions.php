<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */

$roots_includes = array(
  'lib/config.php',          // Configuration

  // Plugins
  'lib/plugins/advanced-custom-fields/acf.php',
  'lib/plugins/acf-repeater/acf-repeater.php',
  'lib/plugins/acf-options-page/acf-options-page.php',

  // ACF Fields
  'lib/fields/pages.php',

  'lib/assets.php',             // Asset helpers (paths, etc)
  'lib/utils.php',              // Utility functions
  'lib/init.php',               // Initial theme setup and constants
  'lib/wrapper.php',            // Theme wrapper class
  'lib/sidebar.php',            // Sidebar class
  'lib/titles.php',             // Page titles
  'lib/nav.php',                // Custom nav modifications
  'lib/scripts.php',            // Scripts and stylesheets
  'lib/extras.php',             // Custom functions
  'lib/nav-menu.php',           // Class for the page navigation menu
  'lib/nav-helpers.php',        // Helpers for navigation
  'lib/front-page-classes.php', // Helper class for the front page
  'lib/front-page.php',         // Constructor for the front page
  'lib/shortcodes.php',         // Shortcodes
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
