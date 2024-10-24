<?php
  add_action('rest_api_init', 'eduthemeRegisterSearch');

  function eduthemeRegisterSearch() {
    register_rest_route('edutheme/v1', 'restQueries', array(
      'methods' => WP_REST_Server::READABLE,
      'callback' => 'eduthemeCustomRoute'
    ) );
  }

  function eduthemeCustomRoute($data) {
   $incQueries = new WP_Query(array(
    'post_type' =>  array('posts', 'pages', 'tutor', 'event', 'course'),
    's' => sanitize_text_field($data['key']),
   ));
   $queryData = array(

   );

   while($incQueries->have_posts()) {
    $incQueries->the_post();
    array_push($tutorData, array(
      'title'=> get_the_title(),
      'link' => get_the_permalink(),
    ));
   }
   return $queryData;
  }
?>