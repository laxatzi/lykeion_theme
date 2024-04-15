      <section id="hero" class="container-fluid pt-5 pb-5">
        <div class="intro container pt-sm-5 pt-4 pb-3 px-sm-2 px-3">
          <h1 class="mt-5 mb-1 fw-bold"><?php  the_archive_title(); ?></h1>
          <nav class="breadcrumb-nav">
            <ol class="breadcrumb d-flex">
              <li class="breadcrumb-item"><a href="<?php echo site_url('/blog') ?>" ?>Blog</a></li>
              <li class="separator">
                <span class="vicon-double-right-arrow-black"></span>
              </li>
              <li class="breadcrumb-item" aria-current="page"><?php echo get_the_title(); ?></li>
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