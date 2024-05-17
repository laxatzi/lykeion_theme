<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
<!-- Main Section -->
    <main class="container-fluid">
      <div class="pt-5" id="about-us">
        <div class="container py-sm-2">
          <div class="row mt-sm-5">
            <!-- Gallery -->
            <!-- The masonry -->
            <div class="about-main d-lg-flex gap-5">
              <div class="images-about mb-5">
                <a
                  class="gal-image classroom"
                  href="img/gallery/students-lesson-in-class.jpg"
                >
                  <div class="img-item">
                    <img
                      src="<?php echo get_theme_file_uri('/img/students-lesson-in-class.jpg') ?>"
                      alt=""
                    />
                    <div class="hovered-content">
                      <span class="gallery-zoom-icon vicon-zoom--white"></span>
                      <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                  </div>
                </a>
                <a
                  class="gal-image event"
                  href="img/gallery/children-theater.jpg"
                >
                  <div class="img-item">
                    <img  src="<?php echo get_theme_file_uri('/img/children-theater.jpg') ?>" alt="" />
                    <div class="hovered-content">
                      <span class="gallery-zoom-icon vicon-zoom--white"></span>
                      <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                  </div>
                </a>
                <a
                  class="gal-image event"
                  href="img/gallery/happy-children-playing.jpg"
                >
                  <div class="img-item">
                    <img src="<?php echo get_theme_file_uri('/img/happy-children-playing.jpg') ?>" alt="" />
                    <div class="hovered-content">
                      <span class="gallery-zoom-icon vicon-zoom--white"></span>
                      <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                  </div>
                </a>
              </div>
              <!--End Gallery -->
              <div id="about-info" class="container">
                <div class="intro--about ps-0 mb-5 text-sm-start text-center">
                  <h3 class="intro">Committed to excellence since 1990</h3>
                  <h2 class="fw-bold mt-2 mb-3">
                    33 Years Together Still Going Strong
                  </h2>
                  <p>
                    Edu_theme opened its doors in 1983 and since the beginning
                    we've helped hundreds of students from all over the country.
                  </p>
                </div>
                <div id="about-tips-section">
                  <div
                    id="about-tips"
                    class="d-lg-flex justify-content-sm-start justify-content-center"
                  >
                    <div class="about-tip d-flex">
                      <div
                        class="icon d-flex justify-content-sm-start justify-content-center"
                      >
                        <span
                          ><img
                            class="img-fluid"
                            src="<?php echo get_theme_file_uri('/img/icons/chalkboard-icon-purple.png') ?>" alt=""
                            alt=""
                        /></span>
                      </div>
                      <div class="tip me-4 p-2 text-sm-start text-center">
                        <h4 class="fw-bold">Flexible Classes</h4>
                        <p>
                          Flexible Learning enables students to have complete
                          control and accountability for their education.
                        </p>
                      </div>
                    </div>
                    <div class="about-tip d-flex">
                      <div
                        class="icon d-flex justify-content-sm-start justify-content-center"
                      >
                        <span
                          ><img
                            class="img-fluid"
                            src="<?php echo get_theme_file_uri('img/icons/livechat-icon-purple.png') ?>" alt=""
                            alt=""
                        /></span>
                      </div>
                      <div class="tip p-2 text-sm-start text-center">
                        <h4 class="fw-bold">Student Support</h4>
                        <p>
                          Our tutors keep an eye on the student's progress and
                          offers guidance and advice when necessary.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div id="about-tips" class="d-lg-flex mt-5">
                    <div class="about-tip d-flex">
                      <div
                        class="icon d-flex justify-content-sm-start justify-content-center"
                      >
                        <span
                          ><img
                            class="img-fluid"
                            src="<?php echo get_theme_file_uri('img/icons/teacher_thumb.png') ?>" alt=""
                            alt=""
                        /></span>
                      </div>
                      <div class="tip p-2 text-sm-start text-center">
                        <h4 class="fw-bold">Industry Expert Tutors</h4>
                        <p>
                          We take great pride in having recognized industry
                          experts as our instructors.
                        </p>
                      </div>
                    </div>
                    <div class="about-tip d-flex">
                      <div
                        class="icon d-flex justify-content-sm-start justify-content-center"
                      >
                        <span
                          ><img
                            class="img-fluid"
                            src="<?php echo get_theme_file_uri('img/icons/openbook-thumb.png') ?>" alt=""
                            alt=""
                        /></span>
                      </div>
                      <div class="tip p-2 text-sm-start text-center">
                        <h4 class="fw-bold">Up-to-date Course Content</h4>
                        <p>Our courses are innovative, fresh, and relevant.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- about tips section end -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="clients d-lg-flex p-3">
              <div class="brands-title-wrapper mb-sm-4">
                <h5 class="fw-bold brands-title text-md-start text-center">
                  Brands that trust our work:
                </h5>
              </div>
              <div class="the-brands d-md-flex">
                <!-- logo 5 -->
                <span class="brand ms-lg-4 fw-bold img-100"
                  ><img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo5-primary-thumb.png') ?>" alt=""
                    alt=""
                /></span>
                <span class="brand fw-bold img-300">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo5-primary-300.png') ?>" alt=""
                    alt=""
                  />
                </span>
                <!-- logo 4 -->
                <span class="brand ms-2 fw-bold img-100"
                  ><img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo4-primary-thumb.png') ?>" alt=""
                    alt=""
                /></span>
                <span class="brand fw-bold img-300">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo4-300.png') ?>" alt=""
                    alt="" />
                </span>
                <!-- logo 3 -->
                <span class="brand ms-2 fw-bold img-100"
                  ><img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo3-primary-thumb.png') ?>" alt=""
                    alt=""
                /></span>
                <span class="brand fw-bold img-300">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo3-300.png') ?>" alt=""
                    alt="" />
                </span>
                <!-- logo 2 -->
                <span class="brand ms-2 fw-bold img-100"
                  ><img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo2-primary-thumb.png') ?>" alt=""
                    alt=""
                /></span>
                <span class="brand fw-bold img-300">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo2-300.png') ?>" alt=""
                    alt="" />
                </span>
                <!-- logo 1 -->
                <span class="brand ms-2 fw-bold img-100"
                  ><img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo1-primary-thumb.png') ?>" alt=""
                    alt=""
                /></span>
                <span class="brand fw-bold img-300">
                  <img
                    class="img-fluid"
                    src="<?php echo get_theme_file_uri('img/icons/logo1-300.png') ?>" alt=""
                    alt="" />
                </span>
                <!-- end of logotypes -->
              </div>
            </div>
          </div>
        </div>

        <div class="shapes">
          <div class="shape-image shape-image-37">
            <img
              src="<?php echo get_theme_file_uri('img/shapes/geometric-6.png') ?>"
              src="img/shapes/Lykeion/geometric-6.png"
              alt="" />
          </div>
          <div class="shape-image shape-image-36">
            <img
              src="<?php echo get_theme_file_uri('img/shapes/geometric-2.png') ?>"
              alt="" />
          </div>
          <div class="shape-image shape-image-9">
            <img
              src="<?php echo get_theme_file_uri('img/shapes/geometric-5.png') ?>"
              alt="" />
          </div>
          <div class="shape-image shape-image-38">
            <img
              src="<?php echo get_theme_file_uri('img/shapes/geo-shape-transparent-4-pink.png') ?>"
              alt=""
            />
          </div>
        </div>

        <!-- our-process section -->
        <div class="row">
          <section id="our-process" class="container-fluid">
            <div class="container">
              <div
                class="intro--topics p-5 ps-0 pt-4 text-sm-start text-center"
              >
                <h3 class="intro">Our Process</h3>
                <h2 class="fw-bold mt-2 mb-3">How Does Edu_theme Work?</h2>
              </div>
              <div id="our-process-details" class="d-md-flex">
                <span class="me-2 intro-details text-sm-start text-center">
                  <h5 class="fw-bold">Learning In Classroom</h5>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Recusandae, labore nam?
                  </p>
                </span>
                <span
                  ><img
                    class="img-fluid pointing-arrow"
                    src="<?php echo get_theme_file_uri('img/shapes/geometric-5.png') ?>"
                    src="img/icons/curved-arrow-1.png"
                    alt=""
                /></span>
                <span class="text-center">
                  <img
                    src="img/icons/down-arrow.png"
                    src="<?php echo get_theme_file_uri('img/shapes/geometric-5.png') ?>"
                    class="img-fluid down-arrow-thumbnail"
                    alt=""
                  />
                </span>
                <span class="me-2 ms-2 intro-details text-sm-start text-center">
                  <h5 class="fw-bold">Asynchronous Learning vClass</h5>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Esse, tempore.
                  </p>
                </span>
                <span
                  ><img
                    class="img-fluid pointing-arrow"
                    src="<?php echo get_theme_file_uri('img/shapes/geometric-5.png') ?>"
                    src="img/icons/curved-arrow-1.png"
                    alt=""
                  />
                </span>
                <span class="text-center">
                  <img
                    src="img/icons/down-arrow.png"
                    src="<?php echo get_theme_file_uri('img/shapes/geometric-5.png') ?>"
                    class="img-fluid down-arrow-thumbnail"
                    alt=""
                  />
                </span>
                <span class="ms-2 intro-details text-sm-start text-center">
                  <h5 class="fw-bold">Daily Evaluation Tests</h5>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ratione, sunt!
                  </p>
                </span>
              </div>
            </div>
            <div class="shapes">
              <div class="shape-image shape-image-39">
                <img
                  src="<?php echo get_theme_file_uri('img/shapes/geo-shape-transparent-5.png') ?>"
                  alt=""
                />
              </div>
              <div class="shape-image shape-image-40">
                <img
                  src="<?php echo get_theme_file_uri('img/shapes/geo-shape-transparent-8-small.png') ?>"
                  alt=""
                />
              </div>
            </div>
          </section>
        </div>
        <!-- our mission/vision section -->
        <div class="row">
          <section id="mission" class="container-fluid">
            <div class="container">
              <div id="mission-gallery">
                <!-- Gallery -->
                <div class="row">
                  <div class="about-masonry mb-5">
                    <a href="img/children-portrait.jpg" class="masonry-brick">
                      <div class="about-masonry-img">
                        <img
                          src="<?php echo get_theme_file_uri('img/children-portrait.jpg') ?>"
                          class="rounded img-fluid"
                          alt="Children are playing"
                        />
                      </div>
                    </a>
                    <a class="masonry-brick" href="img/writter-400x700.png">
                      <div class="about-masonry-img">
                        <img
                          src="<?php echo get_theme_file_uri('img/writter-400x700.png') ?>"
                          class="rounded img-fluid"
                          alt="Pen on paper"
                        />
                      </div>
                    </a>
                    <a class="masonry-brick" href="img/class-portrait.jpg">
                      <div class="about-masonry-img">
                        <img
                          src="<?php echo get_theme_file_uri('img/class-portrait.jpg') ?>"
                          class="rounded img-fluid"
                          alt="student group work"
                        />
                      </div>
                    </a>
                    <a class="masonry-brick" href="img/caimbridge-450x650.png">
                      <div class="about-masonry-img">
                        <img
                          src="<?php echo get_theme_file_uri('img/caimbridge-450x650.png') ?>"
                          class="rounded img-fluid"
                          alt="cambridge university"
                        />
                      </div>
                    </a>
                    <a
                      class="masonry-brick"
                      href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                    >
                      <div class="massonry-img">
                        <img
                          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                          class="rounded img-fluid"
                          alt="Waves at Sea"
                        />
                      </div>
                    </a>
                    <a
                      class="masonry-brick"
                      href="img/girl-in-class-portrait.jpg"
                    >
                      <div class="about-masonry-img">
                        <img
                          src="img/girl-in-class-portrait.jpg"
                          class="rounded img-fluid"
                          alt="Yosemite National Park"
                        />
                      </div>
                    </a>
                    <a class="masonry-brick" href="img/back-to-school-opt.jpg">
                      <div class="about-masonry-img">
                        <img
                          src="img/back-to-school-opt.jpg"
                          class="rounded img-fluid"
                          alt="Students on classroom"
                        />
                      </div>
                    </a>
                  </div>
                </div>
                <!-- Gallery -->
              </div>
              <div id="mission-statements" class="d-lg-flex p-4">
                <div id="mission" class="p-3 me-3">
                  <div class="intro--about ps-0 mb-3 text-sm-start text-center">
                    <h3 class="intro">Our Mission</h3>
                    <h2 class="fw-bold mt-2 mb-3">What We Strive to Achieve</h2>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Libero perferendis, officia vel aliquam nulla repellendus
                      rem temporibus modi maiores, quibusdam consectetur optio
                      itaque similique sint!
                    </p>
                  </div>
                </div>
                <div id="vision" class="p-3">
                  <div class="intro--about ps-0 mb-3 text-sm-start text-center">
                    <h3 class="intro">Our Vision</h3>
                    <h2 class="fw-bold mt-2 mb-3">Our Founders' Story</h2>
                    <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Libero perferendis, officia vel aliquam nulla repellendus
                      rem temporibus modi maiores, quibusdam consectetur optio
                      itaque similique sint!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Data Section -->
          <section id="data-section" class="container-fluid">
            <div class="container">
              <div class="data-container d-md-flex">
                <div class="data-tab p-3 d-flex">
                  <div class="data-info text-center">
                    <img
                      class="img-fluid"
                      src="img/icons/certificate-tumb-white.png"
                      alt=""
                    />
                    <h3 class="fw-bold">350+</h3>
                    <h5>Certified Students</h5>
                  </div>
                </div>
                <div class="data-tab p-3 d-flex">
                  <div class="data-info text-center">
                    <img
                      class="img-fluid"
                      src="img/icons/student-thumb.png"
                      alt=""
                    />
                    <h3 class="fw-bold">450+</h3>
                    <h5>Enrolled Students</h5>
                  </div>
                </div>
                <div class="data-tab p-3 d-flex">
                  <div class="data-info text-center">
                    <img
                      class="img-fluid"
                      src="img/icons/course-thumb-white-100.png"
                      alt=""
                    />
                    <h3 class="fw-bold">30+</h3>
                    <h5>Years in Education</h5>
                  </div>
                </div>
                <div class="data-tab p-3 d-flex">
                  <div class="data-info text-center">
                    <img
                      class="img-fluid"
                      src="img/icons/review-thumb-white.png"
                      alt=""
                    />
                    <h3 class="fw-bold">300+</h3>
                    <h5>Positive Reviews</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="shapes">
              <div class="shape-image shape-image-43">
                <img src="img/shapes/Lykeion/geometric-22.png" alt="" />
              </div>
              <div class="shape-image shape-image-41">
                <img src="img/shapes/Lykeion/geometric-21.png" alt="" />
              </div>
              <div class="shape-image shape-image-42">
                <img
                  src="img/shapes/Lykeion/geo-shape-transparent-18.png"
                  alt=""
                />
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>
<?php
    get_footer();
?>
