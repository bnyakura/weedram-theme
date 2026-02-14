<?php
// Prevent direct access
if (!defined('ABSPATH')) exit;

$includes = [
  '/inc/utils.php',
  '/inc/theme-setup.php',
  '/inc/theme-helper.php',
  '/inc/theme-styles.php',
];

foreach ($includes as $file) {
  $path = get_stylesheet_directory() . $file;
  if (file_exists($path)) {
    require_once $path;
  }
}