<?php
    get_header('inner');
    get_template_part('template-parts/banners/tutor-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main class="container-fluid">
      <div class="py-xl-5 pe-5 container" >
        <div class="row">
          <div class="col-lg-10 col-md-10" id="blog-details-section">

            <h1 class="fw-bold"><?php the_title();?></h1>
            <?php
            the_content();
             ?>
          </div>
        </div>
      </div>
    </main>
  <?php
    }

    get_footer();
?>