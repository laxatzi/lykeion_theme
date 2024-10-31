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
    'post_type' =>  array('post','tutor', 'event', 'course'),
    's' => sanitize_text_field($data['key']),
   ));
   $queryData = array(
     'post' => array(),
     'event' => array(),
     'course' => array(),
     'tutor' => array(),
   );

   while($incQueries->have_posts()) {
    $incQueries->the_post();
    if (get_post_type() == 'post') {
      array_push($queryData['post'], array(
        'title'=> get_the_title(),
        'link' => get_the_permalink(),
        'excerpt' => get_the_excerpt(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
         'thumbnail' => get_the_post_thumbnail( null, array( 250, 200)),
    ));
   }

   if (get_post_type() == 'event') {
      $eventDate = new DateTime(get_field('event_date'));

      array_push($queryData['event'], array(
        'title'=> get_the_title(),
        'link' => get_the_permalink(),
        'excerpt' => get_the_excerpt(),
        'postType' => get_post_type(),
        'authorName' => get_the_author(),
        'thumbnail' => get_the_post_thumbnail( null, array( 250, 200)),
        //$eventDate->format('j').' '.$eventDate->format('F').' '. $eventDate->format('Y')
        'date' => $eventDate->format('j'),
        'monthName' => $eventDate->format('F'),
        'year' => $eventDate->format('Y'),
    ));
   }

      if (get_post_type() == 'tutor') {
         array_push($queryData['tutor'], array(
          'title'=> get_the_title(),
          'link' => get_the_permalink(),
          'excerpt' => get_the_excerpt(),
          'postType' => get_post_type(),
          'authorName' => get_the_author(),
          'thumbnail' => get_the_post_thumbnail( null, array( 200, 200)),
    ));
   }

      if (get_post_type() == 'course') {
        array_push($queryData['course'], array(
          'title'=> get_the_title(),
          'link' => get_the_permalink(),
          'excerpt' => get_the_excerpt(),
          'postType' => get_post_type(),
          'authorName' => get_the_author(),
          'thumbnail' => get_the_post_thumbnail( null, array( 250, 200)),
    ));
   }

  }

   return $queryData;
  }
?>