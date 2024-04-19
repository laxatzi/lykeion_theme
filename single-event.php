<?php

    get_header('inner');
    get_template_part('template-parts/banners/event-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main id="virtual-classes" class="container-fluid courses">
      <div class="pt-5 container" >
        <div class="row mt-5">
          <div class="main-img">
            <img src="img/back-to-school-1300.jpg" alt="" class="rounded">
          </div>
        </div>
        <div class="row">
          <div class="course-info-main p-sm-4 p-3 mt-md-5 mt-sm-4 mt-3 ps-0 d-flex">
            <main class="p-sm-3 p-2 mb-md-0 mb-5">
              <div class="course-title">
                  <h1 class="fw-bold mt-4 mb-5"><?php the_title();?></h1>
              </div>
              <?php
                the_content();
              ?>

          </div>
        </div>


    </div>
  </div>
</main>
  <?php
    }

    get_footer();
?>

