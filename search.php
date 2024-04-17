<?php
   get_header('inner');
    get_template_part('template-parts/banners/search-banner');
?>
   <main class="container-fluid">
      <div class="py-5 pe-5 container" >
        <div class="row mt-5">
        <aside class="col-xl-4">
          <div class="aside-div blog-search p-4 mb-4">
            <div class="aside-title py-3">
              <h3>Search Post</h3>
            </div>
            <div class="aside-content py-4">
              <div class="input-group mb-3 d-flex align-items-center">
                <form class="search-form" method="get" action="<?php echo esc_url(site_url('')) ?>">
                  <input type="search" name="s" class="form-control p-2" aria-label="Search keyword">
                  <div class="input-group-append">
                    <input class="input-group-search p-2 fw-bold" type="submit" value="Search">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="aside-div insta-feed p-4 mt-5">
            <div class="aside-title py-3">
              <h3>Instagram Feed</h3>
            </div>
            <div class="aside-content py-4">
              <div class="img-wrapper d-flex justify-content-center align-items-center">
                <img
                src="<?php echo get_theme_file_uri('/img/insta-feed-thumbnail.jpg') ?>" alt="instagram feed">
              </div>
            </div>
            <small class="attribute">Image by <a href="https://www.freepik.com/free-psd/flat-design-school-admission-instagram-posts_43373373.htm#query=instagram%20feed%20students&position=44&from_view=search&track=ais">Freepik</a></small>
          </div>

         </aside>
          <main class="col-xl-7 me-4" >
          <?php
            while(have_posts()) {
              the_post();
            ?>
            <div class="the-blogPost py-4"  >
            <!-- title -->
           <div class="blogPost-title px-4 mb-4">
            <a href="<?php the_permalink(); ?>">
              <h2 class="fw-bold"><?php the_title(); ?></h2>
            </a>
           </div>
           <div class="blogPost-content px-4 pb-4">
             <?php the_excerpt(); ?>
              <div class="read-more mt-3 mb-3 btn btn-lg col-md-4 col-sm-12">
                <a href="<?php the_permalink(); ?>" class="link-btn">Read More</a>
                <span class="vicon-arrow--right"></span>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
         <nav>
            <div class="events-pagination d-flex gap-1 container">
                <?php the_posts_pagination( array(
                    'mid_size'  => 5,
                    'prev_text' => __( '<', 'textdomain' ),
                    'next_text' => __( '>', 'textdomain' ),
                ) ); ?>
            </div>
          </nav>
         </main>
        </div>
      </div>
   </main>
<?php
  get_footer();
?>
