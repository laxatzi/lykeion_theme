<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body style="overflow-x: hidden">
    <main id="coming-soon-section" class="container-fluid">
      <div class="row p-md-5">
        <div
          id="coming-soon-content"
          class="d-flex justify-content-center align-items-center py-md-5"
        >
          <div class="row col-lg-8 py-md-5">
            <div
              class="edu_theme-title d-flex justify-content-center align-items-center mb-3"
            >
              <a class="edu_theme me-3 d-flex" href="#"
                ><span class="vicon-logo me-1"></span>
                <h2 class="fw-bold">edu_theme</h2></a
              >
            </div>
            <div
              class="coming-soon-msg d-flex edu_theme justify-content-center align-items-center"
            >
              <h1 class="fw-bold text-center">We are coming soon!</h1>
            </div>
            <div class="countdown-wrapper my-sm-5">
              <div class="card-group">
                <div class="card m-3 rounded">
                  <div class="card-body text-center">
                    <h2 class="card-title fw-bold" id="js--day"></h2>
                    <h3 class="card-text fw-bold">DAYS</h3>
                  </div>
                </div>
                <div class="card m-3 rounded">
                  <div class="card-body text-center">
                    <h2 class="card-title fw-bold" id="js--hour"></h2>
                    <h3 class="card-text fw-bold">HOURS</h3>
                  </div>
                </div>
                <div class="card m-3 rounded">
                  <div class="card-body text-center">
                    <h2 class="card-title fw-bold" id="js--min"></h2>
                    <h3 class="card-text fw-bold">MINS</h3>
                  </div>
                </div>
                <div class="card m-3 rounded">
                  <div class="card-body text-center">
                    <h2 class="card-title fw-bold" id="js--sec"></h2>
                    <h3 class="card-text fw-bold">SECS</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="coming-soon-desc text-center my-2 p-2">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel
              alias tempora laboriosam est eligendi, temporibus ex officiis
              neque soluta odit necessitatibus commodi numquam. Cumque, ipsa.
              Repudiandae ullam doloribus nobis ipsa id maxime ipsum velit,
              reprehenderit aspernatur numquam.
            </div>
            <!-- newsletter container start -->
            <div class="newsletter-container d-flex pt-4">
              <!-- Newsletter form -->
              <div class="input-container">
                <div class="input-group">
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter your email"
                  />
                  <div class="read-more nletter btn btn-lg">
                    <input type="submit" class="link-btn" value="Subscribe" />
                    <span class="vicon-arrow--right"></span>
                  </div>
                </div>
                <p id="emailHelp" class="pt-2">
                  *We'll never share your email with anyone else.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Shapes -->
    <div class="shapes">
      <div class="shape-image shape-image-44">
        <img
          src="<?php echo get_theme_file_uri('img/shapes/geo-shape-transparent-9.png'); ?>"
          alt="" />
      </div>
      <div class="shape-image shape-image-45">
        <img
          src="<?php echo get_theme_file_uri('img/shapes/geometric-21.png'); ?>"
          alt="" />
      </div>
      <div class="shape-image shape-image-46">
        <img
          src="<?php echo get_theme_file_uri('img/shapes/geo-shape-transparent-5.png'); ?>"
          alt="" />
      </div>
      <div class="shape-image shape-image-47">
        <img
          src="<?php echo get_theme_file_uri('img/shapes/memphis-shape2-big.png'); ?>"
          alt="" />
      </div>
    </div>
    <!-- end shapes -->
    <?php
    get_footer();
?>

