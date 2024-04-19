     <section id="hero" class="container-fluid pt-5 pb-5">
        <div class="intro container pt-sm-5 pt-4 pb-3 px-sm-2 px-3">
          <h2 class="banner mt-5 mb-1 fw-bold"><a href="<?php echo site_url('/blog') ?>">Events</a></h2>
          <nav class="breadcrumb-nav">
            <ol class="breadcrumb d-flex">
             <li class="breadcrumb-item"><?php
                 $post_id = ( empty( $post->ID ) ) ? get_the_ID() : $post->ID;
                 $post_categories = wp_get_post_categories( $post_id, array( 'fields' => 'names' ) );

                  if( $post_categories ){ // Always Check before loop!
                    foreach($post_categories as $name){
                      echo $name;
                    }
                } ?></li>
                  <li class="separator">
                <span class="vicon-double-right-arrow-black"></span>
              </li>
              <li class="breadcrumb-item" aria-current="page"><?php echo get_the_title() ?></li>
            </ol>
          </nav>
        </div>
      </section>
      <!-- Shapes -->
      <div class="shapes">
        <div class="shape-image shape-image-32">
          <img
            class="img-fluid"
            src="<?php echo get_theme_file_uri('/img/icons/world_orange-small.png') ?>"
            src="img/icons/world_orange-small.png"
            alt=""
          />
        </div>
        <div class="shape-image shape-image-33">
          <img
            class="img-fluid"
            src="<?php echo get_theme_file_uri('/img/shapes/shape-circles.png') ?>"
            alt=""
          />
        </div>
        <div class="shape-image shape-image-34">
          <img
            class="img-fluid"
            src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-15.png') ?>"
            alt=""
          />
        </div>
        <div class="shape-image shape-image-35">
          <img class="img-fluid"
          src="<?php echo get_theme_file_uri('/img/icons/abstract419.png') ?>"
          alt="" />
        </div>
      </div>