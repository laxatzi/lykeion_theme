<?php
  add_action('rest_api_init', 'eduthemeRegisterSearch');

  function eduthemeRegisterSearch() {
    register_rest_route('edutheme/v1', 'searchRoute', array(
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
     'postsOrPages' => array(),
     'event' => array(),
     'course' => array(),
     'tutor' => array(),


   );

   while($incQueries->have_posts()) {
    $incQueries->the_post();
    if (get_post_type() == 'post' or get_post_type() == 'pages') {
         array_push($queryData['postsOrPages'], array(
      'title'=> get_the_title(),
      'link' => get_the_permalink(),
    ));
   }

   if (get_post_type() == 'event') {
      array_push($queryData['event'], array(
      'title'=> get_the_title(),
      'link' => get_the_permalink(),
    ));
   }

      if (get_post_type() == 'tutor') {
         array_push($queryData['tutor'], array(
      'title'=> get_the_title(),
      'link' => get_the_permalink(),
    ));
   }

      if (get_post_type() == 'tutor') {
         array_push($queryData['tutor'], array(
      'title'=> get_the_title(),
      'link' => get_the_permalink(),
    ));
   }

  }

   return $queryData;
  }
?>