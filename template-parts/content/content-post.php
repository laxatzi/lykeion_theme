            <div class="the-blogPost"  >
          <!-- image -->
            <div class="blogPost-image">
               <?php echo get_the_post_thumbnail(); ?>
            </div>
          <!-- meta -->
            <div class="blogPost-meta px-4 pt-sm-3 d-sm-flex align-items-center justify-content-between my-4">
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
           <div class="blogPost-content px-4 pb-4">
             <?php the_excerpt(); ?>
              <div class="read-more mt-3 mb-3 btn btn-lg col-md-4 col-sm-12">
                <a href="<?php the_permalink(); ?>" class="link-btn">Read More</a>
                <span class="vicon-arrow--right"></span>
              </div>
            </div>
          </div>