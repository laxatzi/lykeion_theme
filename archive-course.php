<?php
   get_header('inner');
    get_template_part('template-parts/banners/course-banner');
?>
    <!-- Virtual Classe Section -->
    <section id="virtual-classes" class="container-fluid all-courses">
      <div class="container">
        <div id="virtual-classes--intro" class="d-lg-flex">
          <div
            id="vclasses-headings"
            class="ps-lg-0 p-lg-5 p-sm-3 p-2 mt-sm-0 mt-5 text-md-start text-center"
          >
            <h3 class="intro">Learn english your way!</h3>
            <h2 class="mt-2 mb-3 fw-bold">We offer the best virtual courses</h2>
          </div>
          <div id="vclasses-selections" class="p-lg-5 p-md-3 ps-0 mt-3">
            <button class="is-active vclass-tabs m-1 p-2">All</button>
            <button class="vclass-tabs m-1 p-2">Trending</button>
            <button class="vclass-tabs m-1 p-2">Popularity</button>
            <button class="vclass-tabs m-1 p-2">Featured</button>
          </div>
        </div>
        <!-- course list -->
        <div id="vclasses-list">
          <div class="d-sm-flex flex-wrap">
        <!-- course-item -->
            <?php

            while(have_posts()) {
              the_post();
              ?>
            <div id="vclasses-list">
              <div class="d-sm-flex flex-wrap">
          <!-- start card display  -->
            <div class="card p-4">
              <div class="card-img-container">
                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(null, array( 400, 400)); ?></a>
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
                      src="<?php echo get_theme_file_uri('img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span><?php the_field('course_level'); ?></span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span><?php the_field('course_duration'); ?> days</span>
                  </div>
                </div>
                 <a href="<?php the_permalink(); ?>"><h5 class="fw-bold mb-2 mt-2" style="font-size: 1.15rem"><?php the_title(); ?></h5></a>

                <p class="card-text">
                <?php

                  $excerpt = get_the_excerpt();

                  $excerpt = substr( $excerpt, 0, 140 ); // Only display first 260 characters of excerpt
                  $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                  echo $result;

                  ?>
                </p>
                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="img-fluid me-1"
                      src="<?php the_field('author_image') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2"><?php the_field('course_instructor'); ?></h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-2">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span><?php the_field('course_lessons'); ?></span>&nbsp;
                      <p>Lessons</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$<?php the_field('course_price'); ?></div>
                  <div class="price price-prev">
                    <s class="ms-4">$<?php the_field('course_old_price'); ?></s>
                  </div>
                </div>

                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="<?php echo get_the_permalink(); ?>" class="link-btn d-flex"
                    >Enroll now <span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>
            <!-- end card -->
              </div>
            </div>
              <?php
            }
              ?>
          </div>
      </div>
     </div>
</section>

<?php
  get_footer();
?>
