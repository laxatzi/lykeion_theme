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
      $eventTime = new DateTime(get_field('event-time'));

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
        'time' => $eventTime->format('H:i:s'),
        'location'=> get_field('event_venue'),
    ));
   }

      if (get_post_type() == 'tutor') {
         array_push($queryData['tutor'], array(
          'title'=> get_the_title(),
          'link' => get_the_permalink(),
          'excerpt' => get_the_excerpt(),
          'postType' => get_post_type(),
          'authorName' => get_the_author(),
          'thumbnail' => get_the_post_thumbnail( null, array( 300, 320)),
          'tutorTitle' => get_field('tutor_title'),
          'id' => get_the_ID(),

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
          'price' => get_field('course_price'),
          'oldPrice' => get_field('course_old_price'),
          'avatar' => get_avatar( get_the_author_meta( 'ID' ), 40 ),
          'authorPosts' => get_the_author_posts_link(),
          'courseDuration' => get_field('course_duration'),
          'courseLevel' => get_field('course_level'),
          'id' => get_the_ID(),
    ));
   }

  }

  // Course Meta Query

   if ($queryData['course']) {
     $courseMetaQuery = array ('relation' => 'OR');

     foreach($queryData['course'] as $subject) {
      array_push($courseMetaQuery, array(
          'key' => 'related_courses',
          'compare' => 'LIKE',
          'value' => '"' . $subject['id'] . '"'
        ));
    }

   $courseRelationshipQuery = new WP_Query(array(
      'post_type' => 'tutor',
      'meta_query' => $courseMetaQuery,
    ));

    while($courseRelationshipQuery->have_posts()) {
      $courseRelationshipQuery->the_post();

      if (get_post_type() == 'tutor') {
        array_push($queryData['tutor'], array(
          'title'=> get_the_title(),
          'link' => get_the_permalink(),
          'thumbnail' => get_the_post_thumbnail( null, array( 300, 320)),

        ));
      }

    }

    $queryData['tutor'] = array_values(array_unique($queryData['tutor'], SORT_REGULAR));
  }

    // Tutor Meta Query
if ($queryData['tutor']) {
     $tutorMetaQuery = array ('relation' => 'OR');

     foreach($queryData['tutor'] as $subject) {
      array_push($tutorMetaQuery, array(
          'key' => 'related_tutors',
          'compare' => 'LIKE',
          'value' => '"' . $subject['id'] . '"'
        ));
    }

   $tutorRelationshipQuery = new WP_Query(array(
      'post_type' => 'course',
      'meta_query' => $tutorMetaQuery,
    ));

    while($tutorRelationshipQuery->have_posts()) {
      $tutorRelationshipQuery->the_post();

      if (get_post_type() == 'course') {
        array_push($queryData['course'], array(
          'title'=> get_the_title(),
          'link' => get_the_permalink(),
          'thumbnail' => get_the_post_thumbnail( null, array( 300, 320)),

        ));
      }

    }

    $queryData['course'] = array_values(array_unique($queryData['course'], SORT_REGULAR));
  }

   return $queryData;
  }