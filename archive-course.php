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
                    <span>Beginner</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>3h 34m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">
                  English for restaurant workers
                </h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="img-fluid me-1"
                      src="img/sigmund-thumb.jpg"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">Daniel Gerard</h4>
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
                  <div class="price price-current">$55.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $69.99</s>
                  </div>
                </div>

                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
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
