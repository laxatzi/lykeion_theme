<?php
  add_action('rest_api_init', 'eduthemeRegisterSearch');

  function eduthemeRegisterSearch() {
    register_rest_route('x', 'z', 'y' );
  }

?>