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
    add_theme_support('custom-header', array(
      'default-image' => get_template_directory_uri() .
        '/images/custom-header-image.png',
      'width' => 240,
      'height' => 80,
      'header-text' => false
    ));
    add_theme_support('title-tag');
    load_theme_textdomain('many-widget-area', get_template_directory() .
      '/languages');
    register_nav_menus(array(
      'primary' => __('Site header navigation menu', 'many-widget-area')
    ));
  }
}
add_action('after_setup_theme', 'many_widget_area_setup_theme');

if(!function_exists('many_widget_area_widgets_init')) {
  function many_widget_area_widgets_init() {
    register_sidebar(array(
      'name' => __('Before site title widget area', 'many-widget-area'),
      'id' => 'sidebar-1',
      'description' => __('Widget area above the site title',
        'many-widget-area'),
      'class' => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>\n"
    ));
    register_sidebar(array(
      'name' => __('Before site header navigation menu widget area',
        'many-widget-area'),
      'id' => 'sidebar-2',
      'description' => __('Widget area above the site header navigation',
        'many-widget-area'),
      'class' => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>\n"
    ));
    register_sidebar(array(
      'name' => __('After site header navigation menu widget area',
        'many-widget-area'),
      'id' => 'sidebar-3',
      'description' => __('Widget area below the site header navigation',
        'many-widget-area'),
      'class' => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => "</h2>\n"
    ));
  }
}
add_action('widgets_init', 'many_widget_area_widgets_init');
