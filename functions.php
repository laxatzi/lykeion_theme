<?php

// Scripts and Styles
  function edutheme_files() {
    wp_enqueue_style('edutheme_google_font_montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('edutheme_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('edutheme_main_styles', get_theme_file_uri('/css/index.css'));
    wp_enqueue_style('edutheme_vicon_styles', get_theme_file_uri('/css/vicons.css'));
    wp_enqueue_style('edutheme_search_styles', get_theme_file_uri('/css/search.css'));
    wp_enqueue_script('main-js-file', get_theme_file_uri("/js/index.js"), array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), true); // all the bootstrap javascript goodness
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');

  function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'main-js-file' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

  // Dedicated scripts
  function add_custom_js_to_specific_page() {

    if ( is_page('pricing') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/toggle-prices.js', array(), false, true);

    }

     if ( is_page('faq') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/toggle-pages.js', array(), false, true);

    }

    if ( is_page('comming-soon') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/countdown.js', array(), false, true);

    }

    if ( is_page('gallery') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/masonry.js', array(), false, true);

    }

    if ( is_page('level') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/toggle-test.js', array(), false, true);

    }

    if ( is_page('account') OR is_page('reset-password') ) {

    wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/toggle-vicons.js', array(), false, true);

    }

    // if ( is_page('search') ) {

    // wp_enqueue_script('my-custom-script', get_stylesheet_directory_uri() . '/js/searchin.js', array('jquery'), false, true);

    // }

}

add_action('wp_enqueue_scripts', 'add_custom_js_to_specific_page');


// Theme Features
  function lykeion_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'custom-post-type-name',
    ));
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


// Display Popular Posts
function wp_display_popular_posts($num_posts) {

 $popular = new WP_Query(array(
     'posts_per_page' => $num_posts,
     'meta_key' => 'post_views_count',
     'orderby' => 'meta_value_num',
     'order' => 'DESC'
 ));

 if ($popular->have_posts()) {
     while ($popular->have_posts()) {
         $popular->the_post();
         echo '<div class="latest-post-item d-flex py-4">
                <div class="latest-post-img">'.
                  get_the_post_thumbnail('', array(100, 100))
                .'</div>
                <div class="latest-post-info">
                  <div class="latest-post-date">
                   <small style="font-style:italic">'.$publish_date = get_the_time('j F, Y').'</small>
                  </div>
                  <div class="latest-post-title"><h6 class="fw-bold"><a href="'.get_permalink().'">'.get_the_title().'</a></h6></div>
                </div>
              </div>';
     }
 }

 wp_reset_postdata();
}


add_theme_support( 'post-thumbnails' );

function university_adjust_queries($query) {
      //  The is_admin function will evaluate to true only if we are in the back-end (thus in our case in the front-end)
		if(!is_admin() AND is_post_type_archive('course') AND $query->is_main_query()) {

			$query->set('orderby', 'title');
			$query->set('order', 'ASC');
			$query->set('posts_per_page', -1);
		}


		if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
			$today = date('Ymd');
			$query->set('meta_key', 'event_date');
			$query->set('oderby', 'meta_value_num');
			$query->set('order', 'ASC');
			$query->set('meta_query', array(
					array(
						'key' => 'event_date',
						'compare' => '>=',
						'value' => $today,
						'type' => 'numeric'
					)
				));
		}
	}

	add_action('pre_get_posts', 'university_adjust_queries');