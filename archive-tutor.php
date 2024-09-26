<?php
   get_header('inner');
   get_template_part('template-parts/banners/archive-banner');
   get_template_part('template-parts/banners/shape-banner');
?>

   <main class="container-fluid">

      <div class="my-5 container" >
         <h2>Meet our tutors: </h2>
        <div class="row mt-5">
           <div class="p-3 col-lg-10 col-md-10">

          <?php
            while(have_posts()) {
              the_post();
            ?>
            <div class="the-tutorPost p-4 mb-4"  >
              <div class="blogPost-title mb-4">
                <a href="<?php the_permalink(); ?>">
                  <h2 class="fw-bold"><?php the_title(); ?></h2>
                </a>
             </div>
             <div class="content_wrapper d-flex">
               <div class="img_wrapper">
                <?php the_post_thumbnail(); ?>
               </div>
               <div class="the_content">
                <?php the_content(); ?>
               </div>
             </div>
           </div>
          <?php
            }
          ?>
          </div>
         <nav>
            <div class="events-pagination d-flex gap-1 container">
                <?php the_posts_pagination( array(
                    'mid_size'  => 5,
                    'prev_text' => __( '<', 'textdomain' ),
                    'next_text' => __( '>', 'textdomain' ),
                ) ); ?>
            </div>
          </nav>

        </div>
      </div>
   </main>
<?php
  get_footer();
?>
