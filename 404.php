<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>

	<body class="overflow-hidden">
    <div id="coming-soon-section">
      <main>
        <div class="container-fluid p-5">
          <div
            id="coming-soon-content"
            class="container py-5 d-flex justify-content-center align-items-center"
          >
            <div
              class="row col-lg-8 col-md-8 d-flex justify-content-center align-items-center"
            >
              <div class="col-lg-6 col-md-6">
                <img src="<?php echo get_theme_file_uri('/img/image.png') ?>" alt="" />
              </div>
            </div>
            <div class="row col-lg-8 col-md-8">
              <div
                class="not-found-msg d-flex edu_theme justify-content-center align-items-center"
              >
                <h2 class="fw-bold text-center">Oops... Page Not Found!</h2>
              </div>
              <div class="coming-soon-desc text-center my-2 p-2">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                <a
                  href="https://www.freepik.com/free-vector/404-error-with-people-holding-numbers-concept-illustration_20906890.htm#page=2&query=404&position=43&from_view=search&track=sph"
                  >Image by storyset</a
                >
                on Freepik
              </div>
              <!-- go back to home div -->
              <div
                class="newsletter-container d-flex pt-4 justify-content-center align-items-center"
              >
                <a
                  class="d-flex btn btn-lg rounded go-to-home"
                  href="<?php echo site_url() ?>"
                >
                  <input
                    type="submit"
                    class="link-btn"
                    value="Go Back To Home"
                  />
                  <span class="vicon-arrow--right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <!-- Shapes -->
    <div class="shapes">
      <div class="shape-image shape-image-44">
        <img src="img/shapes/Lykeion/geo-shape-transparent-9.png" alt="" />
      </div>
      <div class="shape-image shape-image-45">
        <img src="img/shapes/Lykeion/geometric-21.png" alt="" />
      </div>
      <div class="shape-image shape-image-46">
        <img src="img/shapes/Lykeion/geo-shape-transparent-5.png" alt="" />
      </div>
      <div class="shape-image shape-image-47">
        <img src="img/shapes/Lykeion/memphis-shape2-big.png" alt="" />
      </div>
    </div>
    <!-- end shapes -->
    <script
      src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
      integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
      crossorigin="anonymous"
      async
    ></script>
    <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
