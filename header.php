<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header class="site-header" id="site-header">
    <div class="before-site-title-wrap">
      <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
    <div class="site-header-left-container"><?php
    if(get_header_image()) {
      $custom_header = get_custom_header();
      if(is_front_page()) {
      ?><h1 class="header-banner"><img src="<?php header_image(); ?>" alt="<?php
      echo esc_attr(get_bloginfo('name')); ?>" width="<?php
      echo $custom_header->width; ?>" height="<?php echo $custom_header->height;
      ?>" /></h1><?php
      } else {
      ?><p class="header-banner"><img src="<?php header_image(); ?>" alt="<?php
      echo esc_attr(get_bloginfo('name')); ?>" width="<?php
      echo $custom_header->width; ?>" height="<?php echo $custom_header->height;
      ?>" /></p><?php
      }
    } else {
      if(is_front_page()) {
        ?><h1 class="site-title"><?php bloginfo('name'); ?></h1><?php
      } else {
        ?><p class="site-title"><?php bloginfo('name'); ?></p><?php
      }
    } ?></div>
    <div class="site-header-right-container">
      <div class="before-primary-nav-wrap">
        <?php dynamic_sidebar('sidebar-2'); ?>
      </div>
      <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => 'nav',
        'container_id' => 'primary-nav'
      )); ?>
      <div class="after-primary-nav-wrap"></div>
    </div>
  </header>
