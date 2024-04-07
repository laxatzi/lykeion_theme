<?php
// Scripts and Styles
  function edutheme_files() {
    wp_enqueue_style('edutheme_google_font_montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('edutheme_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('edutheme_main_styles', get_theme_file_uri('/css/index.css'));
    wp_enqueue_style('edutheme_vicon_styles', get_theme_file_uri('/css/vicons.css'));
    wp_enqueue_script('main-js-file', get_theme_file_uri("/js/index.js"), array('jquery'), '1.0.0', true );
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');

// Theme Features
  function lykeion_features() {
    add_theme_support('title-tag');
  }

  add_action('after_setup_theme', 'lykeion_features');

// Show views
  function gt_get_post_view() {

    $count = get_post_meta( get_the_ID(), 'post_views_count', true );

    return "$count views";

}

  function gt_set_post_view() {

      $key = 'post_views_count';

      $post_id = get_the_ID();

      $count = (int) get_post_meta( $post_id, $key, true );

      $count++;

      update_post_meta( $post_id, $key, $count );

  }

  function gt_posts_column_views( $columns ) {

      $columns['post_views'] = 'Views';

      return $columns;

  }

  function gt_posts_custom_column_views( $column ) {

      if ( $column === 'post_views') {

          echo gt_get_post_view();

      }

  }

add_filter( 'manage_posts_columns', 'gt_posts_column_views' );

add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

// Next function...




