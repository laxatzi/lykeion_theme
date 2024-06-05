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
                    <span class="vicon-calendar-event me-2"></span>
                    <span>Course Duration</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span><?php
                      $courseDuration = new DateTime(get_field('course_duration'));
			                echo $courseDuration->format('j').' '.$courseDuration->format('F').' '. $courseDuration->format('Y')
                    ?></span>
                  </div>
                </div>
              <!-- Students -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>Students</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span><?php the_field('course_number'); ?></span>
                  </div>
                </div>
              <!-- Lessons -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-users me-2"></span>
                    <span>Lessons</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_lessons'); ?></span>
                  </div>
                </div>
          <!-- Skill Level -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-time-primary me-2"></span>
                    <span>Skill Level</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span><?php the_field('course_level'); ?></span>
                  </div>
                </div>
            <!-- Lang -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-time-primary me-2"></span>
                    <span>Language</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span><?php the_field('course_language'); ?></span>
                  </div>
                </div>
            <!-- Quizzes -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-geo-pin--primary me-2"></span>
                    <span>Quizzes</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span style="font-size:.75rem;margin-right: -1rem;"><?php the_field('course_quizzes'); ?></span>
                  </div>
                </div>
             <!-- Cert -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-tag--primary me-2"></span>
                    <span>Certification</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span>&euro; <?php the_field('course_certification'); ?></span>
                  </div>
                </div>
            <!-- Pass Percentage -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-tag--primary me-2"></span>
                    <span>Pass Percentage</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span>&euro; <?php the_field('pass_percentage'); ?>%</span>
                  </div>
                </div>
             <!-- Deadline -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-tag--primary me-2"></span>
                    <span>Certification</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span>&euro; <?php the_field('course_deadline'); ?></span>
                  </div>
                </div>
              <!-- Instructor -->
                <div class="info-list d-flex mt-3 mb-3 p-3">
                  <div class="info-list-level fw-bold d-flex">
                    <span class="vicon-tag--primary me-2"></span>
                    <span>Certification</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">

                    <span>&euro; <?php the_field('course_instructor'); ?></span>
                  </div>
                </div>
            <!-- book seat -->
                <div class="event-action">
                 <div class="book-seat btn btn-lg mt-5 col-11">
                   <a href="" class="link-btn">Book your seat</a>
                   <span class="vicon-arrow--right"></span>
                 </div>
                 <div class="share-event d-flex mt-5 align-items-start">
                    <h6 class="me-3">Share:</h6>
                    <?php
                     $get_url =  get_bloginfo( 'url' );
                     // encode url
                       $encode_the_url = urlencode( get_permalink() );
                      // get_the_title and add space
                      $title_with_space = str_replace( ' ', '%20', get_the_title());
                      //sharing on social
                      $twitter_url = 'https://twitter.com/intent/tweet?text='.$title_with_space.'&amp;url='.$encode_the_url.'&amp;via='.$get_url.'';
                      $facebook_url = 'https://www.facebook.com/sharer/sharer.php?u='.$encode_the_url;
                      $linkedIn_url = 'https://www.linkedin.com/shareArticle?mini=true&url='.$encode_the_url.'&amp;title='.$title_with_space;
                    ?>
                    <a href="<?php echo $twitter_url; ?>" target="_blank" rel="nofollow noopener"><span class="vicon-x me-2"></span></a>
                    <a href="<?php echo $facebook_url; ?>" target="_blank" rel="nofollow noopener"><span class="vicon-facebook-square me-2"></span></a>
                    <!-- <a href=""><span class="vicon-youtube me-3"></span></a> -->
                    <a href="<?php echo $linkedIn_url; ?>" target="_blank" rel="nofollow noopener"><span class="vicon-linkedin "></span></a>
                  </div>
                </div>
               </div>
            </aside>
        </div>
<!-- end row -->
      </div>
<!-- end of container -->
      </div>
   </main>
<?php
        }
  get_footer();
?>