<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
    <main class="container-fluid">
      <div class="pt-md-4 pt-sm-3 pt-2" id="faq-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-5 mb-5 col-10 d-flex gap-4">
<!-- form div -->
            <div class="form-wrapper mt-3  col-12">
              <h2 class="fw-bold p-3">Login</h2>
              <form
                  class="login mb-5 col-12 p-4"
                  method="post"
                  id="contactForm"
                  name="contactForm"
              >
                  <div class="row">
                    <div class="col-12 form-group">
                      <label for="username">Username or email address *</label>
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="name"
                        id="username"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 form-group">
                      <label for="password">Password *</label>
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="email"
                        id="password"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 form-group mb-4">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <input
                        type="submit"
                        value="Login"
                        class="btn btn-primary rounded btn-lg col-6"
                      />
                      <span class="submitting"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <a href=""><small>Lost your password?</small></a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="form-wrapper mt-3  col-12">
              <h2 class="fw-bold p-3">Register</h2>
                <form
                  class="register mb-5 col-12 p-4"
                  method="post"
                  id="contactForm"
                  name="contactForm"
                >
                  <div class="row">
                    <div class="col-12 form-group">
                      <label for="username">Email address *</label>
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="name"
                        id="username"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 form-group">
                      <label for="password">Password *</label>
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="email"
                        id="password"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 form-group p-3">
                     <small>We will utilize your personal data to enhance your experience on this website, regulate account access, and for other purposes outlined in our privacy policy.</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <input
                        type="submit"
                        value="Register"
                        class="btn btn-primary rounded btn-lg  col-6"
                      />
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
              </div>
                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                  Your message was sent, thank you!
                </div>
                <!-- end of form section -->
              </div>


        <!-- Shapes -->
                <div class="shapes">
                  <div class="shape-image shape-image-44">
                    <img
                      src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-9.png') ?>"
                      alt="" />
                  </div>
                  <div class="shape-image shape-image-45">
                    <img
                      src="<?php echo get_theme_file_uri('/img/shapes/geometric-21.png') ?>"
                      alt="" />
                  </div>

                </div>
          <!-- end shapes -->
            </div>
          </div>
        </div>
    </main>


<?php
    get_footer();

?>

