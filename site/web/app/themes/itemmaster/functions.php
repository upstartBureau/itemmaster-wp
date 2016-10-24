<?php

  add_action( 'after_setup_theme', 'itemmaster_setup' );

  function itemmaster_setup() {
    show_admin_bar( false );

    load_theme_textdomain( 'itemmaster', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );

    global $content_width;

    if ( ! isset( $content_width ) ) $content_width = 640;

    register_nav_menus( array( 'main-left' => __( 'Main Menu Left', 'itemmaster' ) ) );
    register_nav_menus( array( 'main-right' => __( 'Main Menu Right', 'itemmaster' ) ) );

  }

  // add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
  //
  // function clear_nav_menu_item_id($id, $item, $args) {
  //     return "";
  // }

  // add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
  //
  // function clear_nav_menu_item_class($classes, $item, $args) {
  //     return;
  // }
  add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
  add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
  add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

  function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }

  add_action( 'wp_enqueue_scripts', 'itemmaster_load_scripts' );
  add_action( 'wp_enqueue_style', get_stylesheet_uri() );

  function itemmaster_load_scripts() {
    $script_handle = 'im-main';
    $script_source = get_template_directory_uri() . '/theme-resource/js/main.js';
    wp_enqueue_script( $script_handle, $script_source );
  }

  add_action( 'comment_form_before', 'itemmaster_enqueue_comment_reply_script' );

  function itemmaster_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
  }

  add_filter( 'the_title', 'itemmaster_title' );

  function itemmaster_title( $title ) {
    if ( $title == '' ) {
      return '&rarr;';
    } else {
      return $title;
    }
  }

  add_filter( 'wp_title', 'itemmaster_filter_wp_title' );

  function itemmaster_filter_wp_title( $title ) {
    return $title . esc_attr( get_bloginfo( 'name' ) );
  }

  add_action( 'widgets_init', 'itemmaster_widgets_init' );

  function itemmaster_widgets_init() {

    register_sidebar( array(
      'name' => 'Header Main Menu',
      'id' => 'header-main-menu',
      'description' => 'Primary Header Menu',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

    register_sidebar( array(
      'name' => 'Header Sub Menu',
      'id' => 'header-sub-menu',
      'description' => 'Secondary Header Menu',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );

  }
  //
  // add_action( 'template_redirect', 'rw_relative_urls' );
  // function rw_relative_urls() {
  //     // Don't do anything if:
  //     // - In feed
  //     // - In sitemap by WordPress SEO plugin
  //     if ( is_feed() || get_query_var( 'sitemap' ) )
  //         return;
  //     $filters = array(
  //         'post_link',
  //         'post_type_link',
  //         'page_link',
  //         'attachment_link',
  //         'get_shortlink',
  //         'post_type_archive_link',
  //         'get_pagenum_link',
  //         'get_comments_pagenum_link',
  //         'term_link',
  //         'search_link',
  //         'day_link',
  //         'month_link',
  //         'year_link',
  //     );
  //     foreach ( $filters as $filter )
  //     {
  //         add_filter( $filter, 'wp_make_link_relative' );
  //     }
  // }
