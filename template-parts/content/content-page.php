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