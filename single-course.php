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
            <div class="main p-sm-3 p-2 mb-md-0 mb-5">
              <div class="course-title">
                  <h1 class="fw-bold mt-4 mb-5"><?php the_title();?></h1>
              </div>
          <!-- main event content -->
              <div id="intro-page">
                <div class="main-event-content" id="intro">
                  <?php
                    the_content();
                  ?>
                </div>
              </div>
            </div>
            <!-- end of course-info-main section -->
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