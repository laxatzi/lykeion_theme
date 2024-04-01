<?php

  function edutheme_files() {
    wp_enqueue_style('edutheme_main_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');

?>