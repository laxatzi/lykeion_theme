<?php
    get_header('inner');
    get_template_part('template-parts/banners/tutor-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main class="container-fluid">
      <div class="py-xl-5 container" >
        <div class="row">
          <div class="col-lg-10 col-md-10" id="blog-details-section">

            <h1 class="fw-bold"><?php the_title();?></h1>
            <?php
            the_content();
             ?>
          </div>
        </div>

         <!-- new row -->
      <div class="row">
        <div class="course-info-main p-sm-4 d-flex">
          <div class="p-sm-3 p-2 mb-md-0 mb-5">
                <div class="intro--about ps-0 mb-5 text-sm-start text-center">
                  <h3 class="intro">Courses Created by <?php the_field('tutor_name') ?> </h3>
                  <h2 style="text-transform:uppercase;" class="fw-bold mt-2 mb-3">
                    Course Subjects:
                  </h2>
                </div>
          <div id="vclasses-list">
            <div class="d-sm-flex flex-wrap" >
              <?php
                $related_courses = get_field('related_courses');

                if ($related_courses) {
                 foreach($related_courses as $related_course) {

                  ?>

        <!-- start card display  -->

            <div class="card p-3 me-3">
              <div class="card-img-container">
                <a href="<?php echo esc_url( get_permalink($related_course->ID)); ?>">
                         <?php echo get_the_post_thumbnail($related_course, array( 400, 400)); ?>
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
                      src="<?php echo get_theme_file_uri('img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span><?php
                      // get_field values from other post type
                      the_field('course_level',$related_course);
                      ?></span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span><?php the_field('course_duration', $related_course); ?> days</span>
                  </div>
                </div>
                 <a href="<?php echo esc_url( get_permalink($related_course->ID)) ?>"><h5 class="fw-bold mb-2 mt-2" style="font-size: 1.15rem"><?php echo get_the_title($related_course); ?></h5></a>
                <p class="card-text">
                <?php

                  $excerpt = get_the_excerpt();

                  $excerpt = substr( $excerpt, 0, 120 ); // Only display first 120 characters of excerpt
                  $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                  echo $result." [&hellip;]";

                  ?>
                </p>
                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="img-fluid me-1"
                      src="<?php the_field('author_image', $related_course) ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2"><?php the_field('course_instructor', $related_course); ?></h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-2">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span><?php the_field('course_lessons', $related_course); ?></span>&nbsp;
                      <p>Lessons</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$<?php the_field('course_price', $related_course); ?></div>
                  <div class="price price-prev">
                    <s class="ms-2">$<?php the_field('course_old_price', $related_course); ?></s>
                  </div>
                </div>

                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="<?php echo esc_url( get_permalink($related_course->ID)) ?>" class="link-btn d-flex"
                    >Enroll now <span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <!-- end card -->
                   <?php
                 }
                } else {
                  echo "We couldn't find any related course at the moment!";
                 }

              ?>
          </div>
          </div>
          </div>
        </div>
      </div>
      </div>
    </main>
  <?php
    }

    get_footer();
?>