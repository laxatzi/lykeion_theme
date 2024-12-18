<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
    get_template_part('template-parts/banners/shape-banner');

    while(have_posts()) {
    the_post(); ?>
 <main class="container-fluid">
      <div class="p-5" id="about-us">
        <div class="container py-sm-2">
          <div class="row mt-sm-5">
            <h2><?php the_title(); ?></h2>
             <div class="input-group mb-3 d-flex align-items-center">
                  <?php get_search_form(); ?>
              </div>
          </div>
       </div>
     </div>
  </main>

  <?php
    }

    get_footer();
?>
