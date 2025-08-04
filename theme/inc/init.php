<?php
if (!defined('ABSPATH')) {
  exit;
}

function theme_enqueue_scripts() {
  $theme_version = wp_get_theme()->get('Version');
  
  wp_enqueue_style(
    'theme-main-styles',
    get_template_directory_uri() . '/assets/main.bundle.css',
    array(),
    $theme_version
  );
  
  wp_enqueue_script(
    'theme-main-scripts',
    get_template_directory_uri() . '/assets/main.bundle.js',
    array('jquery'),
    $theme_version,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_setup() {
  add_theme_support('post-thumbnails');
  
  add_image_size('cardPrev', 339, 267, true);
}
add_action('after_setup_theme', 'theme_setup');

function theme_register_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'theme')
  ));
}
add_action('init', 'theme_register_menus');