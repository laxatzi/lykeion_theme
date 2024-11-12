<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
    get_template_part('template-parts/banners/shape-banner');

?>
    <main class="container-fluid">
      <div class="pt-3" id="faq-section">
        <div class="container pt-2 pb-5">
          <div class="row mt-sm-5">
              <!-- headings -->
            <div id="vclasses-headings" class="p-sm-5 ps-0 text-center">
              <h3 class="intro text-center">Testimonials</h3>
              <h2 class="mt-2 mb-3 fw-bold text-center">Our Students Feedback!</h2>
            </div>
          </div>
          <div class="row my-3">
            <div class="testimonial-wrapper p-2" >

              <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="testimonials d-flex mt-sm-4 mt-3 pb-sm-5">
                      <!-- first testimonial-card container -->
                      <div class="testimonial-card-container d-lg-flex">
                        <!-- testimonial-card -->
                        <div
                          class="testimonial-card testimonial-card-1 me-2 p-4 mb-lg-0 mb-4"
                        >
                          <div class="student-info d-flex">
                            <img
                              src="<?php echo get_theme_file_uri('/img/thumbs/happy-studentgirl-thumbnail-55.png') ?>"
                              alt=""
                              class="img-fluid"
                            />
                            <div class="student-info-content ms-3">
                              <div class="name fw-bold">Maria Stevens</div>
                              <div class="cert">C1 Advanced</div>
                            </div>
                          </div>
                          <div class="student-testimonial mt-3">
                            <p>
                              &ldquo; Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Asperiores dolor deserunt quas facere quisquam
                              exercitationem voluptate laudantium rem repudiandae dolore!
                              Quasi?&rdquo;
                            </p>
                          </div>
                          <div class="student-rating mt-4">
                            <div class="rating-stars d-flex mb-2">
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- testimonial-card-->
                        <div
                          class="testimonial-card testimonial-card-2 me-2 p-4 mb-lg-0 mb-4"
                        >
                          <div class="student-info d-flex">
                            <img
                              src="<?php echo get_theme_file_uri('/img/thumbs/happy-student-thumbnail.png') ?>"
                              alt=""
                              class="img-fluid"
                            />
                            <div class="student-info-content ms-3">
                              <div class="name fw-bold">Juan Hernangomez</div>
                              <div class="cert">B2 First</div>
                            </div>
                          </div>
                          <div class="student-testimonial mt-3">
                            <p>
                              &ldquo; Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Asperiores dolor deserunt quas facere quisquam
                              exercitationem voluptate laudantium rem repudiandae dolore!
                              Quasi?&rdquo;
                            </p>
                          </div>
                          <div class="student-rating mt-4">
                            <div class="rating-stars d-flex mb-2">
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                            </div>
                          </div>
                        </div>
                        <!-- testimonial-card -->
                        <div class="testimonial-card testimonial-card-3 p-4">
                          <div class="student-info d-flex">
                            <img
                              src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumbnail-55.png') ?>"
                              alt=""
                              class="img-fluid"
                            />
                            <div class="student-info-content ms-3">
                              <div class="name fw-bold">Petros Papadopoulos</div>
                              <div class="cert">C2 Proficiency</div>
                            </div>
                          </div>
                          <div class="student-testimonial mt-3">
                            <p id="hop">
                              &ldquo; Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Asperiores dolor deserunt quas facere quisquam
                              exercitationem voluptate laudantium rem repudiandae dolore!
                              Quasi?&rdquo;
                            </p>
                          </div>
                          <div class="student-rating mt-4">
                            <div class="rating-stars d-flex mb-2">
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end of testimonial-card container -->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="testimonials d-flex mt-sm-4 mt-3 pb-sm-5">
                  <!-- testimonial-card -->
                  <div class="testimonial-card testimonial-card-3 p-4">
                    <div class="student-info d-flex">
                      <img
                        src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumbnail-55.png') ?>"
                        alt=""
                        class="img-fluid"
                      />
                      <div class="student-info-content ms-3">
                        <div class="name fw-bold">Petros Papadopoulos</div>
                        <div class="cert">C2 Proficiency</div>
                      </div>
                    </div>
                    <div class="student-testimonial mt-3">
                      <p id="hop">
                          &ldquo; Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Asperiores dolor deserunt quas facere quisquam
                          exercitationem voluptate laudantium rem repudiandae dolore!
                          Quasi?&rdquo;
                      </p>
                    </div>
                    <div class="student-rating mt-4">
                      <div class="rating-stars d-flex mb-2">
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                              <span class="vicon-star"></span>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            </div>

          </div>

        </div>
        <div class="row my-3">
          <div class="container-fluid testimonials-best">
            <section class="testimonials-best__inner d-flex container">
              <div class="testimonials-sticky p-3 me-4">
                <div class="testimonial-card__inner p-4">
                  <div class="student-rating mt-2 ">
                      <div class="rating-stars d-flex mb-2">
                          <span class="vicon-star"></span>
                          <span class="vicon-star"></span>
                          <span class="vicon-star"></span>
                          <span class="vicon-star"></span>
                          <span class="vicon-star"></span>
                      </div>
                    </div>

                    <div class="student-testimonial mt-3">
                      <p id="hop">
                          &ldquo; Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Asperiores dolor deserunt quas facere quisquam
                          exercitationem voluptate laudantium rem repudiandae dolore!
                          Quasi?&rdquo;
                      </p>
                    </div>
                    <div class="student-info d-flex mt-2">
                      <img
                        src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumbnail-55.png') ?>"
                        alt=""
                        class="img-fluid"
                      />
                      <div class="student-info-content ms-3">
                        <div class="name fw-bold">Petros Papadopoulos</div>
                        <div class="cert">C2 Proficiency</div>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="testimonials-info p-3 ms-4">
                <div id="about-info"
                  class="container text-sm-start text-center mt-sm-0 mt-5"
                >
                  <div class="intro--about ps-0 mb-2">
                    <h3 class="intro">Committed to excellence since 1990</h3>
                    <h2 class="fw-bold mt-2 mb-3">About Us</h2>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
                      perferendis!
                    </p>
                  </div>
                  <div id="about-tips-section ">
                    <div id="about-tips">
                      <div class="about-tip d-flex">

                        <div class="tip text-start p-2">
                          <h4 class="fw-bold">84%</h4>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Consequatur hic est nostrum.
                          </p>
                        </div>
                      </div>
                      <div class="about-tip d-flex">

                        <div class="tip text-start p-2">
                          <h4 class="fw-bold">9/10</h4>
                          <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Consequatur hic est nostrum.
                          </p>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>

              </div>

            </section>
          </div>
        </div>
      </div>
    </main>
<?php
    get_footer();
?>

