<?php

add_action( 'admin_bar_menu', 'ultra_cleanup_admin_bar', 9999 );

function ultra_cleanup_admin_bar( $wp_admin_bar ) {
  $wp_admin_bar->remove_node('updates');
  $wp_admin_bar->remove_node('comments');
  $wp_admin_bar->remove_node('new-content');
  $wp_admin_bar->remove_node('wp-logo');
}