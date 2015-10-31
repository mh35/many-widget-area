<?php
if(!isset($content_width)) {
  $content_width = 1920;
}

if(!function_exists('many_widget_area_setup_theme')) {
  function many_widget_area_setup_theme() {
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('status', 'quote', 'gallery',
      'image', 'video', 'audio', 'link', 'aside', 'chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form',
      'comment-list', 'gallery', 'caption'));
    add_theme_support('title-tag');
    load_theme_textdomain('many-widget-area', get_template_directory() .
      '/languages');
  }
}
add_action('after_setup_theme', 'many_widget_area_setup_theme');
