<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');


    while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php
     get_template_part('template-parts/content/content-page');
    ?>
  <?php
    }

    get_footer();
?>
