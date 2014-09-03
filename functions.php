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
  'config',          // Configuration

  // Plugins
  'plugins/advanced-custom-fields/acf',
  'plugins/acf-repeater/acf-repeater',
  'plugins/acf-options-page/acf-options-page',
  'plugins/acf-gallery/acf-gallery',

  'plugins/add-from-server/add-from-server',

  // ACF Fields
  'fields/pages',
  'fields/gallery',
  'fields/maps',
  'fields/records',
  'fields/cache',
  'fields/dates',
  'fields/sponsors',
  'fields/register-button',

  'options',            // Advanced custom fields options pages
  'assets',             // Asset helpers (paths, etc)
  'utils',              // Utility functions
  'init',               // Initial theme setup and constants
  'wrapper',            // Theme wrapper class
  'sidebar',            // Sidebar class
  'titles',             // Page titles
  'nav',                // Custom nav modifications
  'scripts',            // Scripts and stylesheets
  'extras',             // Custom functions
  'front-page-classes', // Helper class for the front page
  'front-page',         // Constructor for the front page
  'shortcodes',         // Shortcodes
  'gallery-type',       // Gallery type and taxonomies
  'gallery-page',       // Gallery page helpers
  'media-bulk-actions', // Bulk media operations - setting year, rotating
  'responsive-images',  // Responsive image sizes
  'bib-tagging',        // Bib tagging
  'map-type',           // Maps
  'image-handling',     // Image manipulation to make logos uniform
  'cache',              // Setup cache directory
  'caching',            // Setup options page to clear cache
  'admin-cleanup',      // Cleanup the admin interface
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template('lib/' . $file . '.php')) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

# Load add from server
afs_load();
