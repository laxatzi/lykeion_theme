            <div class="card p-4 mb-3">
              <div class="card-img-container">
                 <a href="<?php  echo get_the_permalink(); ?>">
                        <?php  echo get_the_post_thumbnail(null, array( 400, 500));  ?>
                      </a>

              </div>

              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;31&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span><?php the_field('course_level') ?></span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span><?php the_field('course_duration') ?> days</span>
                  </div>
                </div>
                 <a href="<?php  echo get_the_permalink(); ?>">
                  <h3 class="fw-bold mb-2 mt-4">
                    <?php the_title(); ?>
                  </h3>
                </a>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">


              <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>

                    <h4 class="fw-bold pt-2 ps-2"><?php  the_author_posts_link(); ?></h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>8</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$<?php the_field('course_price') ?></div>
                  <div class="price price-prev">
                    <s class="ms-2"> $<?php the_field('course_old_price') ?></s>
                  </div>
                </div>

                <div class="read-more mt-3 mb-3 btn btn-lg">
                   <a href="<?php echo get_the_permalink(); ?>" class="link-btn d-flex">

                    Enroll now <span class="vicon-arrow--right"></span></a>
                </div>
              </div>
            </div>