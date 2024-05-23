<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');


    while(have_posts()) {
    the_post(); ?>


    <main class="container-fluid">
      <div class="py-5 pe-5 container" id="privacy-section">
        <div class="row mt-5 mb-5">
          <div class="col-lg-10">
            <div class="privacy-rules">
                  <h2 class="mb-5"><?php the_title(); ?></h2>
    <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </main>
  <?php
    }

    get_footer();
?>
