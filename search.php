<?php
   get_header('inner');
   get_template_part('template-parts/banners/archive-banner');
   get_template_part('template-parts/banners/shape-banner');
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

         </aside>
          <main class="col-xl-7 me-4" >
          <?php
            if (have_posts()) {

              while(have_posts()) {
                the_post();
                get_template_part('template-parts/content/content', get_post_type());
              }
            } else {
              echo "<h2>No Results Match Your Query!</h2>";
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
