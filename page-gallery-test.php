<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
<!-- code here -->
  <main class="container-fluid" id="section-main">
    <div class="py-5" id="pricing-section">
      <div class="container py-5">
        <div class="row mt-md-5 mt-sm-4 mt-3">
          <div class="col-lg-12 col-md-12 d-md-flex justify-content-between align-items-center gallery-info px-sm-5 ps-sm-0 px-2">
            <h2 class="gallery-title mx-0 fw-bold mb-md-0 mb-4">Gallery Masonry</h2>

            <!-- Gallery Filters -->
            <div class="gallery-filters d-flex gap-2">
              <div class="gallery-filter">
                <button type="button" class="btn active">All</button>
              </div>
              <div class="gallery-filter">
                <button type="button" class="btn inactive">Events</button>
              </div>
              <div class="gallery-filter">
                <button type="button" class="btn inactive">Classroom</button>
              </div>
            </div>
          </div>
        <!-- The masonry -->
          <div class="container mt-md-5 mt-sm-4 mt-3 pt-5">
            <div class="col-md-12">
              <div class="row">
                <div class="masonry mb-5">
                  <a

                    class="masonry-brick classroom"
                    href="<?php echo get_theme_file_uri('img/gallery/students-lesson-in-class.jpg')?>">
                  <div class="masonry-img">
                    <img
                      src="<?php echo get_theme_file_uri('img/gallery/students-lesson-in-class.jpg')?>"
                      alt="" />
                    <div class="hovered-content">
                      <span class="gallery-zoom-icon vicon-zoom--white"></span>
                      <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                  </div>
                  </a>
                 
                    
                        
                    
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
    get_footer();

?>