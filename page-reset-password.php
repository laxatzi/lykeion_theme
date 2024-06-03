<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
    <main class="container-fluid">
      <div class="pt-md-4 pt-sm-3 pt-2" id="faq-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-5 mb-5 col-10 d-flex flex-column flex-lg-row gap-4">
<!-- form div -->
            <div class="form-wrapper mt-3  col-10">
              <form
                  class="login mb-5 col-10 p-4"
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
                    <div class="col-12 form-group pass">
                      <label for="password">Password *</label>
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="email"
                        id="password"
                      />
                                            <span class=" vicon-eye-open vicon-eye-close  me-1 eye-toggle"></span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-6">
                      <input
                        type="submit"
                        value="Reset"
                        class="btn btn-primary rounded btn-lg col-6"
                      />
                      <span class="submitting"></span>
                    </div>
                  </div>

                </form>
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

