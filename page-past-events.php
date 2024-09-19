<?php
   get_header('inner');
    get_template_part('template-parts/banners/events-all-banner');
?>
   <main class="container-fluid pb-5">
      <div class="py-5 pe-5 container" id="events" >
       <div class="row" >
        <!-- events headings -->
          <div id="vclasses-headings" class="p-sm-5 ps-0 text-center">
            <h3 class="intro text-center">Learning can be fun!</h3>
            <h2 class="mt-2 mb-3 fw-bold text-center">Past Events!</h2>
          </div>
        </div>

         <!-- event list -->
      <div id="event-list" class="d-flex mb-2 mt-3 container" >
      <!-- event-item -->
                <?php
                  $today = date("Ymd");
                 $past_events = new WP_Query(array(
                  'paged' => get_query_var('paged', 1),
                  'posts_per_page' => 2,
                  'post_type' => 'event',
                  'meta_key' => 'event_date',
                  'orderby' => 'meta_value_num',
                  'order' => 'ASC',
                  'meta_query' => array(
                    array(
                      'key' => 'event_date',
                      'compare' =>  '<',
                      'value' => $today,
                      'type' => 'numeric',
                    )
                  )
                ));

            while($past_events->have_posts()) {
              $past_events->the_post();
              ?>
        <div class="row">
          <div class="event-item d-lg-flex mb-3 p-4">
            <div class="info-wrapper d-sm-flex">
              <div class="event-thumbnail me-2">
                <div class="img-wrapper-event--wide d-none d-sm-block">

                   <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(null, array( 145, 145)); ?></a>
                </div>
                <div class="img-wrapper-event--mobile d-block d-sm-none">
                   < <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(null, array( 400, 400)); ?></a>
                </div>
            </div>
            <!-- event info -->
            <div class="event-info">
               <a href="<?php the_permalink(); ?>"><h4 class="fw-bold mb-3"><?php the_title(); ?></h4></a>
            <!-- event-meta -->
              <div class="events-meta d-xl-flex py-3">
                <div class="meta meta-date d-flex">
                  <span class="event-vicon vicon-calendar me-2"></span>
                  <p><?php
                    $eventDate = new DateTime(get_field('event_date'));
			              echo $eventDate->format('j').' '.$eventDate->format('F').' '. $eventDate->format('Y');
                    ?>
                  </p>
                </div>
                <div class="meta meta-time d-flex">
                  <span class="event-vicon vicon-time me-2"></span>
                  <p><?php the_field('event_time'); ?></p>
                </div>
                <div class="meta meta-location d-flex">
                  <span class="event-vicon vicon-geo-pin me-2"></span>
                  <p><?php the_field('event_venue'); ?></p>
                </div>
              </div>
            <!-- end event info -->
            </div>
          </div>
          <div class="event-book">
            <div class="read-more btn btn-lg col-lg-12 col-md-4 col-12">
                <a href="<?php echo get_the_permalink(); ?>" class="link-btn d-flex">Book your seat <span class="vicon-arrow--right"></span></a>

            </div>
          </div>
      <!-- end event item -->
        </div>
      </div>
      </div>
      <!-- end of event list -->
         <!-- pagination -->
          <?php
            }
          ?>
          <div class="container" >
            <div class="events-pagination d-flex gap-1 container" >
              <?php
                  echo paginate_links(array(
                  'total' => $past_events->max_num_pages,
                  'prev_text'    =>  __('«'),
                  'next_text'    =>  __('»'),
                ));
              ?>
            </div>
            <div class="read-more btn btn-lg col-xl-3 col-lg-4 col-md-5 col-8 my-5" style="margin: 0 auto;">
              <a href="<?php echo get_post_type_archive_link('event') ?>" class="link-btn d-flex">
                View All Future Events <span class="vicon-arrow--right"></span>
              </a>
          </div>
        </div>

    </div>
   </main>
<?php
  get_footer();
?>
