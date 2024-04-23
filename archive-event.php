<?php
   get_header('inner');
    get_template_part('template-parts/banners/events-all-banner');
?>
   <main class="container-fluid">
      <div class="py-5 pe-5 container" >
        <div class="row mt-5 d-flex flex-column flex-lg-row ">
         <aside class="col-xl-4 order-xl-first order-last">
          <div class="aside-div blog-search p-4 mb-4">
            <div class="aside-title py-3">
              <h3>Search Post</h3>
            </div>
            <div class="aside-content py-4">
            <div class="input-group mb-3 d-flex align-items-center">
              <input type="search" class="form-control p-2" aria-label="Search keyword">
              <div class="input-group-append">
                <span class="input-group-search p-2 fw-bold">Search</span>
              </div>
            </div>
            </div>
          </div>

          <div class="aside-div latest-posts p-4 my-4">
            <div class="aside-title py-3">
              <h3>Popular Posts</h3>
            </div>
            <div class="aside-content ">
              <?php wp_display_popular_posts(3); ?>
            </div>
          </div>

          <div class="aside-div blog-categories p-4 my-4">
            <div class="blog-categories-item">
             <!-- aside content -->
              <div class="aside-content py-4">
                <div class="categories">
                  	<?php wp_list_categories( array(
                    'orderby'    => 'name',
                    'show_count' => true,
                    'hide_empty' => 1,
                  ) );
                  ?>
                 </div>
               </div>
             </div>
           </div>

          <div class="aside-div blog-tags p-4 my-4">
            <div class="aside-title py-3">
              <h3>Tags</h3>
            </div>
            <div class="aside-content py-4">
              <div class="tag-wrapper d-flex flex-wrap">
                <?php
                 global $post;
                  $tags =  get_tags(array(
                    $post->ID,
                    'hide_empty' => false

                  ));
                  echo '<div class="the-tag ">';
                  foreach ($tags as $tag) {

                    echo '<a href="<?php get_tag_link($tag->term_id) ?>">' . $tag->name . '</a>';
                  }
                  echo '</div>';

                  ?>
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
          <main class="col-xl-7 me-4 order-xl-last order-first" >
          <?php
            while(have_posts()) {
              the_post();
            ?>
            <div class="the-blogPost"  >
          <!-- image -->
            <div class="blogPost-image">
               <?php echo get_the_post_thumbnail(null, array( 760, 527)); ?>
            </div>
          <!-- meta -->
            <div class="blogPost-meta px-4 pt-sm-3 d-sm-flex align-items-center justify-content-between mt-3 mb-4 mt-xl-0 ">
              <div class="blogPost-views d-flex align-items-center">
                <span class="vicon-views"></span>
                <h5>
                  <?php
                    gt_set_post_view();
                    echo gt_get_post_view();
                  ?>
                </h5>
              </div>
              <div class="blogPost-comments d-flex align-items-center">
                <span class="vicon-comment"></span>
                <h5>
                 <?php echo $post->comment_count ?>
                </h5>
              </div>
              <div class="blogPost-date d-flex align-items-center">
                <span class="vicon-calendar"></span>
                <h5 style="font-style:italic">
                  <?php
                    $publish_date = get_the_time('j F, Y');
                   echo $publish_date;
                  ?>
                </h5>
              </div>
            </div>
            <!-- title -->
           <div class="blogPost-title px-4 mb-4">
            <a href="<?php the_permalink(); ?>">
              <h2 class="fw-bold"><?php the_title(); ?></h2>
            </a>
           </div>
           <div class="blogPost-content d-flex px-4 pb-4">

             <?php the_excerpt(); ?>
              <div class="read-more mt-3 mb-3 ms-3 btn btn-lg col-md-4 col-sm-12">
                <a class="d-flex" href="<?php the_permalink(); ?>" class="link-btn">Read More<span class="vicon-arrow--right"></span></a>

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
