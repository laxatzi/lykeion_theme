<?php

    get_header('inner');
    get_template_part('template-parts/post-banner');


    while(have_posts()) {
    the_post(); ?>
 <main class="container-fluid">
      <div class="p-5" id="about-us">
        <div class="container py-sm-2">
          <div class="row mt-sm-5">
            <h2><?php the_title(); ?></h2>
             <form method="get" action="<?php echo esc_url(site_url('')) ?>">
              <input type="search" name="s">
              <input type="submit" value="Search">

             </form>
          </div>
       </div>
     </div>
  </main>

  <?php
    }

    get_footer();
?>
