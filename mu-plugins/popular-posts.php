<?php

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




?>