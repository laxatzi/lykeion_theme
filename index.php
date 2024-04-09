<?php
  get_header();
  get_template_part('template-parts/page-banner');
?>
   <main class="container-fluid">
      <div class="py-5 pe-5 container" >
        <div class="row mt-5">
        <?php
          while(have_posts()) {
            the_post();
        ?>
        <div class="blogPost-title px-4 mb-4">
            <a href="<?php the_permalink(); ?>">
              <h2 class="fw-bold"><?php the_title(); ?></h2>
            </a>
           </div>

        <?php }
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Prev', 'textdomain' ),
                'next_text' => __( 'Next', 'textdomain' ),
              )); ?>
        </div>
       </div>
     </div>
  </main>
<?php
    get_footer();
?>