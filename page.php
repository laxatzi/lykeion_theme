<?php

    get_header('inner');
    get_template_part('template-parts/page-banner');


    while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php
    }

    get_footer();
?>
