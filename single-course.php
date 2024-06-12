<?php
    get_header('inner');
    get_template_part('template-parts/banners/course-banner');
        while(have_posts()) {
    the_post();

  ?>
   <main id="virtual-classes" class="container-fluid courses">
      <div class="pt-5 container" >
        <div class="row mt-5">
          <div class="main-img">
            <?php echo  get_the_post_thumbnail(null, array(1400, 800));  ?>
          </div>
        </div>
         <div class="row">
          <div class="course-info-main p-sm-4 p-3 mt-md-5 mt-sm-4 mt-3 ps-0 d-flex">
            <main class="p-sm-3 p-2 mb-md-0 mb-5">
              <div class="course-title">
                  <h1 class="fw-bold mt-4 mb-5"><?php the_title();?></h1>
              </div>
          <!-- main course content -->
              <div id="intro-page">
                <div class="main-event-content" id="intro">
                  <?php
                    the_content();
                  ?>
                </div>
              </div>
            </main>
            <!-- end of course-info-main section -->
            <aside class="d-flex flex-column event-sidebar">
              <div class="event-title">
                <h2 class="text-center fw-bold py-5">Course Details</h2>
              </div>
              <div class="event-detailing p-3">
              <!-- Course Duration -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-calendar-event me-3" ></span>
                    <span>Course Duration</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span><?php
                     the_field('course_duration');
                    ?> days</span>
                  </div>
                </div>
              <!-- Students -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-users me-3" ></span>
                    <span >Students</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex" >
                    <span><?php the_field('course_number'); ?></span>
                  </div>
                </div>
              <!-- Lessons -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-video-fill me-3"></span>
                    <span>Lessons</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_lessons'); ?></span>
                  </div>
                </div>
          <!-- Skill Level -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-chart me-3"></span>
                    <span>Skill Level</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span><?php the_field('course_level'); ?></span>
                  </div>
                </div>
            <!-- Lang -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-language me-3"></span>
                    <span>Language</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_language'); ?></span>
                  </div>
                </div>
            <!-- Quizzes -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-puzzle me-3"></span>
                    <span>Quizzes</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_quizzes'); ?></span>
                  </div>
                </div>
             <!-- Cert -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-cert me-3"></span>
                    <span>Certification</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_certification'); ?></span>
                  </div>
                </div>
            <!-- Pass Percentage -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-percentage me-3"></span>
                    <span>Pass Percentage</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('pass_percentage'); ?>%</span>
                  </div>
                </div>
             <!-- Deadline -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-calendar-event me-3"></span>
                    <span>Deadline</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php
                    $deadlineDate = new DateTime(get_field('course_date'));
			                echo $deadlineDate->format('j').' '.$deadlineDate->format('F').' '. $deadlineDate->format('Y')

                    ?></span>
                  </div>
                </div>
              <!-- Instructor -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-teacher me-3"></span>
                    <span>Instructor</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_instructor');  ?></span>
                  </div>
                </div>
            <!-- buy course -->

                  <div class="buy-course  mt-5 col-11 d-flex justify-content-center">
                  $<?php the_field('course_price'); ?>
                  </div>


                <div class="event-action">
                 <div class="book-seat btn btn-lg mt-3 col-11 d-flex justify-content-center">
                   <a href="" class="link-btn">Buy Now</a>
                 </div>

                 </div>
              </div>
            </aside>
        </div>
<!-- end row -->
      </div>
       <!-- new row -->
      <div class="row">
        <div class="course-info-main p-sm-4 p-3 mt-md-5 mt-sm-4 mt-3 ps-0 d-flex">
          <div class="p-sm-3 p-2 mb-md-0 mb-5">
                <div class="intro--about ps-0 mb-5 text-sm-start text-center">
                  <h3 class="intro">Other Courses You May Also Like!</h3>
                  <h2 style="text-transform:uppercase;" class="fw-bold mt-2 mb-3">
                    Related Courses
                  </h2>
                </div>
              <?php
                $related_courses = get_field('related_courses');

                if ($related_courses) {
                 foreach($related_courses as $related_course) {

                  ?>
                   <a href="<?php echo esc_url( get_permalink($related_course->ID)) ?>"><h5 class="fw-bold mb-2 mt-2" style="font-size: 1.15rem"><?php echo get_the_title($related_course); ?></h5></a>
                   <?php
                 }
                } else {
                  echo "We couldn't find any related course at the moment!";
                 }

              ?>

          </div>
        </div>
      </div>
<!-- end of container -->
      </div>
   </main>
<?php
        }
  get_footer();
?>