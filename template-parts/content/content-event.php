              <div class="event-item d-lg-flex p-4">
                <div class="info-wrapper d-sm-flex">
                  <div class="event-thumbnail me-sm-2">
                    <div class="img-wrapper-event--wide d-none d-sm-block">
                      <a href="<?php  echo get_the_permalink(); ?>">
                        <?php  echo get_the_post_thumbnail(null, array( 150, 150));  ?>
                      </a>
                    </div>
                  </div>
                  <!-- event info -->
                  <div class="event-info">
                    <a href="<?php  echo get_the_permalink(); ?>"
                      ><h4 class="fw-bold mb-3"><?php the_title(); ?></h4></a
                    >
                    <!-- event-meta -->
                    <div class="events-meta d-flex flex-column py-3">
                      <div class="meta meta-date d-flex">
                        <span class="event-vicon vicon-calendar me-2"></span>
                        <p><?php $eventDate = new DateTime(get_field('event_date'));
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
                    <a href="<?php echo get_the_permalink(); ?>" class="link-btn"
                      >Book your seat</a
                    >
                    <span class="vicon-arrow--right"></span>
                  </div>
                </div>
                <!-- end event item -->
              </div>