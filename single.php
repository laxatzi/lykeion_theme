<?php
    get_header();
    get_template_part('template-parts/post-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main class="container-fluid">
      <div class="py-xl-5 pe-5 container" >
        <div class="row">
          <div class="col-lg-10 col-md-10" id="blog-details-section">
            <div class="blog-details--meta d-xl-flex mb-xl-5 mb-sm-4 mb-3 justify-content-between">
              <div class="tag text-uppercase"><a href="tag-page.html">Business</a></div>
                <div class="meta d-xl-flex justify-content-between">
                  <div class="author-meta mb-2 d-flex align-items-center">
                    <img src="img/usman-thumb.jpg" alt="">
                    <h5 class="ms-2 mt-1">John Katsimatides</h5>
                  </div>
                  <div class="blogPost-date-meta d-flex align-items-center">
                    <span class="vicon-calendar"></span>
                    <h5 class="ms-2">Nov 12, 2023</h5>
                  </div>
                  <div class="comments-meta d-flex align-items-center">
                    <span class="vicon-comment"></span>
                    <h5 class="ms-2">4 Comments</h5>
                  </div>
                  <div class="time-to-read d-flex align-items-center">
                    <span class="vicon-time"></span>
                    <h5 class="ms-2">6 min read</h5>
                  </div>
              <!-- end meta -->
              </div>
            </div>
            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </main>
  <?php
    }

    get_footer();
?>