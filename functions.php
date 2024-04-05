<?php

  function edutheme_files() {
    wp_enqueue_style('edutheme_google_font_montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('edutheme_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('edutheme_main_styles', get_theme_file_uri('/css/index.css'));
    wp_enqueue_style('edutheme_vicon_styles', get_theme_file_uri('/css/vicons.css'));
    wp_enqueue_script('main-js-file', get_theme_file_uri("/js/index.js"), array('jquery'), '1.0.0', true );
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');

  function lykeion_features() {
    add_theme_support('title-tag');
  }

add_action('after_setup_theme', 'lykeion_features');

