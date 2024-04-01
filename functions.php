<?php

  function edutheme_files() {
    wp_enqueue_style('edutheme_main_styles', get_stylesheet_uri());
    wp_enqueue_style('edutheme_vicon_styles', get_theme_file_uri('/css/vicons.css'));
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');

?>