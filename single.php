<?php
    get_header();
    get_template_part('template-parts/post-banner');

    while(have_posts()) {
    the_post(); ?>

  <?php
    }

    get_footer();
?>