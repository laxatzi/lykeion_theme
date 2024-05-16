<?php
get_header();
  get_template_part('template-parts/banners/hero-section');

  ?>
    <section id="topics">
      <div class="container">
        <div class="intro--topics p-sm-5 p-3 ps-sm-0 text-sm-start text-center">
          <h3 class="intro">Course Categories</h3>
          <h2 class="fw-bold mt-2 mb-3">Popular Topics To Learn!</h2>
        </div>
        <div class="row gap-4 mb-sm-4 mb-3">
          <div class="col-lg topic rounded p-5">
            <img
              class="mb-3 primary"
              src="<?php echo get_theme_file_uri('/img/icons/generic-public.png') ?>"
              alt=""
            />
            <img
              class="mb-3 white"
              src="<?php echo get_theme_file_uri('/img/icons/generic-public-white.png') ?>"
              alt=""
            />
            <h3 class="fw-bold">General English</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
          <div class="col-lg topic rounded p-5">
            <img class="mb-3 primary" src="<?php echo get_theme_file_uri('/img/icons/briefcase.png') ?>"
            alt="" />
            <img
              class="mb-3 white"
              src="<?php echo get_theme_file_uri('/img/icons/briefcase-white.png') ?>"
              alt=""
            />
            <h3 class="fw-bold">Business English</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
          <div class="col-lg topic rounded p-5">
            <img class="mb-3 primary" src="<?php echo get_theme_file_uri('/img/icons/children.png') ?>"
             alt="" />
            <img class="mb-3 white" src="<?php echo get_theme_file_uri('/img/icons/children-white.png') ?>"
             alt="" />
            <h3 class="fw-bold">Junior English</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
        </div>
        <div class="row gap-4 mb-sm-4 mb-3">
          <div class="col-lg topic rounded p-5">
            <img class="mb-3 primary"
            src="<?php echo get_theme_file_uri('/img/icons/exams.png') ?>"
             alt="" />
            <img class="mb-3 white" src="<?php echo get_theme_file_uri('/img/icons/exams-white.png') ?>"
            alt="" />
            <h3 class="fw-bold">Exam preparation</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
          <div class="col-lg topic p-5 rounded">
            <img class="mb-3 primary" src="<?php echo get_theme_file_uri('/img/icons/vclass.png') ?>"
            alt="" />
            <img class="mb-3 white" src="<?php echo get_theme_file_uri('/img/icons/vclass-white.png') ?>"
            alt="" />
            <h3 class="fw-bold">Virtual Classes</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
          <div class="col-lg topic p-5 rounded">
            <img class="mb-3 primary"
            src="<?php echo get_theme_file_uri('/img/icons/evening.png') ?>"
            alt="" />
            <img class="mb-3 white" src="<?php echo get_theme_file_uri('/img/icons/evening-white.png') ?>"
            alt="" />
            <h3 class="fw-bold">Evening Classes</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Quisquam!
            </p>
          </div>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-4">
          <img src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-9.png') ?>"
           alt="" />
        </div>
        <div class="shape-image shape-image-5">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-4-primary.png') ?>"
            alt=""
          />
        </div>
        <div class="shape-image shape-image-6">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-7.png') ?>"
           alt="" />
        </div>
      </div>
    </section>

    <section id="about" class="container-fluid">
      <div class="about-row d-lg-flex container p-sm-5">
        <div
          id="gallery"
          data-masonry='{"percentPosition": true }'
          class="mb-4"
        >
          <!-- Gallery -->
          <div class="gallery-image">
            <img
              src="<?php echo get_theme_file_uri('/img/students-in-class.png') ?>"
              class="shadow-1-strong rounded me-2 img-fluid"
              alt="teacher and students discussing a topic in the class"
              title="students in class"
            />
            <small class="attribute mb-4">
              Photo by
              <a
                href="https://unsplash.com/@neonbrand?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Kenny Eliason</a
              >
              on
              <a
                href="https://unsplash.com/photos/man-and-woman-sitting-on-chairs-zFSo6bnZJTw?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Unsplash</a
              >
            </small>
          </div>

          <div class="gallery-image">
            <img
              src="<?php echo get_theme_file_uri('/img/empty-classroom.jpg') ?>"
              class="shadow-1-strong rounded img-fluid"
              alt="An empty classroom ready to welcome students"
              title="empty classroom"
            />
            <small class="attribute">
              <a
                href="https://www.freepik.com/free-photo/empty-classroom-due-coronavirus-pandemic_26606670.htm#query=empty%20classroom&position=0&from_view=search&track=ais&uuid=ebe6ee29-28a9-44df-a645-494f49ccadfe"
                >Image by Drazen Zigic</a
              >
              on Freepik
            </small>
          </div>

          <div class="gallery-image">
            <img
              src="<?php echo get_theme_file_uri('/img/girl-in-classroom3.jpg') ?>"
              class="shadow-1-strong rounded img-fluid"
              alt="A girl arriving on her class"
              title="standing girl"
            />
            <small class="attribute p-2"
              >Photo by
              <a
                href="https://unsplash.com/@javotrueba?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >javier trueba</a
              >
              on
              <a
                href="https://unsplash.com/photos/woman-carrying-white-and-green-textbook-iQPr1XkF5F0?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Unsplash</a
              >
            </small>
          </div>
        </div>
        <!-- Gallery -->

        <div
          id="about-info"
          class="container text-sm-start text-center mt-sm-0 mt-5"
        >
          <div class="intro--about ps-0 mb-5">
            <h3 class="intro">Committed to excellence since 1990</h3>
            <h2 class="fw-bold mt-2 mb-3">About Us</h2>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
              perferendis, officia vel aliquam nulla repellendus rem temporibus
              modi maiores, quibusdam consectetur optio itaque similique sint!
            </p>
          </div>
          <div id="about-tips-section">
            <div id="about-tips" class="d-xl-flex">
              <div class="about-tip d-flex">
                <div class="icon">
                  <span
                    ><img
                      src="<?php echo get_theme_file_uri('/img/icons/chalkboard-icon-purple.png') ?>"
                      alt=""
                      class="img-fluid"
                  /></span>
                </div>
                <div class="tip text-start me-4 p-2">
                  <h4 class="fw-bold">Flexible Classes</h4>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Consequatur hic est nostrum.
                  </p>
                </div>
              </div>
              <div class="about-tip d-flex">
                <div class="icon">
                  <span
                    ><img
                      src="img/icons/livechat-icon-purple.png"
                      src="<?php echo get_theme_file_uri('/img/icons/livechat-icon-purple.png') ?>"
                      alt=""
                      class="img-fluid"
                  /></span>
                </div>
                <div class="tip text-start p-2">
                  <h4 class="fw-bold">Student Support</h4>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Consequatur hic est nostrum.
                  </p>
                </div>
              </div>
            </div>

            <div class="read-more mt-5 btn btn-lg col-sm-6 col-12">
              <a href="about.html" class="link-btn d-flex"
                >Learn More<span class="vicon-arrow--right"></span
              ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-7">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geometric-6.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-8">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geometric-2.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-9">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geometric-5.png') ?>"
            alt="" />
        </div>
        <div class="shape-image shape-image-10">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-4-pink.png') ?>"
            alt=""
          />
        </div>
      </div>
    </section>
    <!-- Virtual Classe Section -->
    <section id="virtual-classes" class="container-fluid">
      <div class="container">
        <div id="virtual-classes--intro" class="d-lg-flex">
          <div
            id="vclasses-headings"
            class="p-lg-5 p-sm-3 p-2 mt-sm-0 mt-5 ps-0 text-sm-start text-center"
          >
            <h3 class="intro">Learn english your way!</h3>
            <h2 class="mt-2 mb-3 fw-bold">We offer the best virtual courses</h2>
          </div>
          <div
            id="vclasses-selections"
            class="p-lg-5 p-md-3 ps-0 mt-3 text-center"
          >
            <button class="is-active vclass-tabs m-1 me-2 p-2">All</button>
            <button class="vclass-tabs m-1 me-2 p-2">Trending</button>
            <button class="vclass-tabs m-1 me-2 p-2">Popularity</button>
            <button class="vclass-tabs m-1 p-2">Featured</button>
          </div>
        </div>
        <div id="vclasses-list">
          <div class="d-sm-flex flex-wrap">
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="<?php echo get_theme_file_uri('/img/restaurant-workers.jpg') ?>"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2">
                Photo by
                <a
                  href="https://unsplash.com/@camille1030?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Camille Chen</a
                >
                on
                <a
                  href="https://unsplash.com/photos/people-working-near-desk-vNqE2R7hSoc?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Unsplash</a
                >
              </small>
              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;31&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span>Beginner</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>3h 34m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">
                  English for restaurant workers
                </h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="img-fluid me-1"
                      src="<?php echo get_theme_file_uri('/img/thumbs/sigmund-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">Daniel Gerard</h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>8</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$55.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $69.99</s>
                  </div>
                </div>

                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now <span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="<?php echo get_theme_file_uri('/img/back-to-school-opt.jpg') ?>"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2"
                >Photo by
                <a
                  href="https://unsplash.com/@nci?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >National Cancer Institute</a
                >
                on Unsplash
              </small>
              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex mb-3">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="votes">&#40;35&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span>Beginner</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>7h 04m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">
                  Starting out in english for Junior students
                </h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>

                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="me-1 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">John Katsimatides</h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>6</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$39.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $59.99</s>
                  </div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="<?php echo get_theme_file_uri('/img/girl-in-class-portrait.jpg') ?>"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2"
                >Photo by
                <a
                  href="https://unsplash.com/@javotrueba?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >javier trueba</a
                >
                on
                <a
                  href="https://unsplash.com/photos/woman-carrying-white-and-green-textbook-iQPr1XkF5F0?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Unsplash</a
                >
              </small>
              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex mb-3">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;16&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />

                    <span>Intermediate</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>2h 34m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">Grammar Clinic part 1</h3>

                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>

                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="me-1 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/thumbs/linkedin-sales-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">John Newman</h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>14</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$35.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $49.99</s>
                  </div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="<?php echo get_theme_file_uri('/img/class-portrait.jpg') ?>"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2"
                >Photo by
                <a
                  href="https://unsplash.com/@neonbrand?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Kenny Eliason</a
                >
                on
                <a
                  href="https://unsplash.com/photos/man-and-woman-sitting-on-chairs-zFSo6bnZJTw?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Unsplash</a
                >
              </small>

              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex mb-3">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;40&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span>Intermediate</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>1h 57m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">Grammar Clinic part 2</h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>

                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="me-1 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/thumbs/linkedin-sales-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">John Newman</h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>14</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$55.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $69.99</s>
                  </div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="card p-4">
              <div class="card-img-container">
                <div class="card-img-container">
                  <img
                    src="<?php echo get_theme_file_uri('/img/shipman-portrait.jpg') ?>"
                    class="card-img-top img-fluid"
                    alt=""
                  />
                </div>
                <small class="attribute p-2">
                  Photo by
                  <a
                    href="https://unsplash.com/@shipnorth?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                    >Shipman Northcutt</a
                  >
                  on Unsplash
                </small>
              </div>
              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex mb-3">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;30&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span>Beginner</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>4h 04m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">
                  Starting out in english for Adult students
                </h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>

                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="me-1 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">John Katsimatides</h4>
                  </div>

                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>6</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$55.99</div>
                  <div class="price price-prev">
                    <s class="ms-4"> $89.99</s>
                  </div>
                </div>
                <div class="read-more mt-5 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="<?php echo get_theme_file_uri('/img/secretary-portrait.jpg') ?>"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2"
                >Photo by
                <a
                  href="https://unsplash.com/@joycebusola?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Joyce Busola</a
                >
                on
                <a
                  href="https://unsplash.com/photos/woman-in-white-dress-shirt-L9U5UUScnHY?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Unsplash</a
                >
              </small>
              <div class="card-body">
                <div class="ratings d-flex mb-4">
                  <div class="rating-stars d-flex mb-3">
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>
                    <span class="vicon-star"></span>

                    <span class="votes">&#40;17&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/icons/level-chart-thumb-16.png') ?>"
                      alt=""
                    />
                    <span>Advanced</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>9h 32m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">English for Secretaries</h3>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>

                <div
                  class="tutor d-sm-flex flex-column align-items-start justify-content-center mt-4"
                >
                  <div class="tutor-profile d-flex">
                    <img
                      class="me-1 img-fluid"
                      src="<?php echo get_theme_file_uri('/img/thumbs/sigmund-thumb.jpg') ?>"
                      alt="teacher's profile"
                    />
                    <h4 class="fw-bold pt-2">Daniel Gerard</h4>
                  </div>
                  <div class="tutor-lessons d-flex mt-2">
                    <div class="lesson-icon me-1">
                      <span class="vicon-lesson"></span>
                    </div>
                    <div class="lesson-number d-flex">
                      <span>8</span>&nbsp;
                      <p>Courses</p>
                    </div>
                  </div>
                </div>
                <div class="price-list d-flex mt-5">
                  <div class="price price-current">$89.99</div>
                  <div class="price price-prev"><s> $109.99</s></div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now <span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="events-section" class="container-fluid m-0">
      <div class="events-wrapper container">
        <div class="video-gallery-wrapper pt-2">
          <div class="thumbnail">
            <a
              href="https://www.youtube.com/watch?v=-qfEOE4vtxE"
              class="video-play-btn"
              target="_blank"
            >
              <img
              src="<?php echo get_theme_file_uri('/img/icons/youtube-orange.png') ?>"
              src="img/icons/youtube-orange.png" alt="" />
            </a>
          </div>
          <small class="attribute mb-3 text-center">
            Photos by <a href="https://unsplash.com/">Unsplash</a>. Attribution
            <a href="attribute-page">page</a>
          </small>
        </div>

        <!-- events tabs -->
        <div id="vclasses-events" class="container-fluid">
          <div class="row">
            <!-- events headings -->
            <div id="vclasses-headings" class="p-sm-5 p-1 ps-0 text-center">
              <h3 class="intro text-center">Learning can be fun!</h3>
              <h2 class="mt-2 mb-3 fw-bold text-center">Upcoming Events!</h2>
            </div>
          </div>
          <?php
            $today = date("Ymd");
            $home_events = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type' => 'event',
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
               'meta_query' => array(
                    array(
                      'key' => 'event_date',
                      'compare' =>  '>=',
                      'value' => $today,
                      'type' => 'numeric',
                    )
                  )
            ));

            while($home_events->have_posts()) {
              $home_events->the_post();?>
         <!-- event list -->
          <div id="event-list" class="d-flex mb-sm-3 mt-3 container">
            <!-- event-item -->
            <div class="row">
              <div class="event-item d-lg-flex p-4">
                <div class="info-wrapper d-sm-flex">
                  <div class="event-thumbnail me-sm-2">
                    <div class="img-wrapper-event--wide d-none d-sm-block">
                      <a href="<?php  echo get_the_permalink(); ?>">
                        <?php  echo get_the_post_thumbnail(null, array( 150, 150));  ?>
                      </a>
                    </div>
                  </div>
                  <!-- event info -->
                  <div class="event-info">
                    <a href="<?php  echo get_the_permalink(); ?>"
                      ><h4 class="fw-bold mb-3"><?php the_title(); ?></h4></a
                    >
                    <!-- event-meta -->
                    <div class="events-meta d-xl-flex py-3">
                      <div class="meta meta-date d-flex">
                        <span class="event-vicon vicon-calendar me-2"></span>
                        <p><?php $eventDate = new DateTime(get_field('event_date'));
			                      echo $eventDate->format('j').' '.$eventDate->format('F').' '. $eventDate->format('Y');
                          ?>
                        </p>

                      </div>
                      <div class="meta meta-time d-flex">
                        <span class="event-vicon vicon-time me-2"></span>
                        <p><?php the_field('event_time'); ?></p>
                      </div>
                      <div class="meta meta-location d-flex">
                        <span class="event-vicon vicon-geo-pin me-2"></span>
                        <p><?php the_field('event_venue'); ?></p>
                      </div>
                    </div>
                    <!-- end event info -->
                  </div>
                </div>
                <div class="event-book">
                  <div class="read-more btn btn-lg col-lg-12 col-md-4 col-12">
                    <a href="<?php echo get_the_permalink(); ?>" class="link-btn"
                      >Book your seat</a
                    >
                    <span class="vicon-arrow--right"></span>
                  </div>
                </div>
                <!-- end event item -->
              </div>
            </div>
            <!-- end of event list -->
          </div>
          <?php
            }
          ?>
            <div class="read-more btn btn-lg col-lg-3 col-md-4 col-8 my-5" style="margin: 0 auto;">
              <a href="<?php echo get_post_type_archive_link('event') ?>" class="link-btn d-flex"
                      >View All Events <span class="vicon-arrow--right"></span>
              </a>
            </div>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-14">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geometric-20.png') ?>"
          src="img/shapes/Lykeion/geometric-20.png" alt="" />
        </div>
        <div class="shape-image shape-image-15">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-15.png') ?>"
          src="img/shapes/Lykeion/geo-shape-transparent-15.png" alt="" />
        </div>
        <div class="shape-image shape-image-16">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-16.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-17">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-17.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-18">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/rectangleStripped-primary.png') ?>"
          alt="" />
        </div>
      </div>
    </section>
    <!-- our tutors -->
    <section id="tutors" class="container-fluid">
      <div class="container">
        <div
          id="vclasses-headings"
          class="p-sm-5 pt-sm-0 pt-5 pb-3 ps-0 text-center"
        >
          <h3 class="intro">
            Highly trained native and international teachers
          </h3>
          <h2 class="mt-2 fw-bold">Meet our tutors!</h2>
          <small class="attribute attribute-rev mb-3 text-center">
            Photos by <a href="https://unsplash.com/">Unsplash</a>. Attribution
            <a href="attribute-page">page</a>
          </small>
        </div>
        <div class="tutors-container d-md-flex">
          <div class="tutor-tab">
            <div class="thumbnail">
              <a href="tutor-profile.html">
                <img
                src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumbnail-265.jpg') ?>"
                alt="" />
              </a>
            </div>
            <div class="tutor-info p-2">
              <h5>
                <a href="tutor-profile.html">John Katsimatides</a>
              </h5>
              <span class="desc">English Literature BA (Hons)</span>
            </div>
          </div>
          <div class="tutor-tab">
            <div class="thumbnail">
              <a href="tutor-profile.html">
                <img
                  src="<?php echo get_theme_file_uri('/img/thumbs/john-newman-thumbnail-265.jpg') ?>"
                  alt=""
                  class="img-fluid"
                />
              </a>
            </div>
            <div class="tutor-info p-2">
              <h5>
                <a href="tutor-profile.html">John Newman</a>
              </h5>
              <span class="desc">English Literature BA (Hons)</span>
            </div>
          </div>
          <div class="tutor-tab">
            <div class="thumbnail">
              <a href="tutor-profile.html">
                <img
                  src="<?php echo get_theme_file_uri('/img/thumbs/sigmund-thumbnail-265.jpg') ?>"
                  alt=""
                  class="img-fluid"
                />
              </a>
            </div>
            <div class="tutor-info p-2">
              <h5>
                <a href="tutor-profile.html">Daniel Gerard</a>
              </h5>
              <span class="desc">Certified Business English Tutor</span>
            </div>
          </div>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-19">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geometric-22.png') ?>"
            alt=""
            class="img-fluid"
          />
        </div>
        <div class="shape-image shape-image-20">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geometric-21.png') ?>"
            alt=""
            class="img-fluid"
          />
        </div>
        <div class="shape-image shape-image-21">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-18.png') ?>"
            alt=""
            class="img-fluid"
          />
        </div>
      </div>
    </section>

    <section id="testimonials-section" class="container-fluid">
      <div class="container">
        <div
          id="vclasses-headings"
          class="p-sm-5 pt-sm-0 pt-5 pb-3 ps-0 text-center"
        >
          <h3 class="intro text-center">testimonials</h3>
          <h2 class="mt-2 mb-1 fw-bold text-center">What our students say!</h2>
          <small class="attribute mb-3 text-center">
            Photos by <a href="https://unsplash.com/">Unsplash</a>. Attribution
            <a href="attribute-page">page</a>
          </small>
        </div>
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
        <div class="dots-pagin container d-flex mt-5 mb-sm-0 mb-4">
          <button
            type="button"
            role="tab"
            aria-label="1"
            tabindex="0"
            class="dots-pagin-btn dot-active"
          ></button>
          <button
            type="button"
            role="tab"
            aria-label="1"
            tabindex="0"
            class="dots-pagin-btn"
          ></button>
          <button
            type="button"
            role="tab"
            aria-label="1"
            tabindex="0"
            class="dots-pagin-btn"
          ></button>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-22">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/shape-circles.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-23">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/abstract2-3.png') ?>"
          src="img/shapes/Lykeion/abstract2-3.png" alt="" />
        </div>
        <div class="shape-image shape-image-24">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/geometric-7.png') ?>"
          alt="" />
        </div>
      </div>
    </section>

    <!-- Newsletter section -->
    <section id="newsletter-section" class="container-fluid">
      <div class="container">
        <!-- newsletter container start -->
        <div
          class="newsletter-container d-flex flex-column align-items-center pt-sm-4 pt-5"
        >
          <!-- newsletter cta -->

          <div class="newsletter-cta">
            <div id="vclasses-headings" class="p-sm-4 p-2 ps-lg-0 text-center">
              <h3 class="intro">Join our newsletter list</h3>
              <h2 class="mt-sm-2 mt-1 mb-3 fw-bold">Get the latest news!</h2>
            </div>
          </div>
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
        <!-- newsletter container end -->
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-25">
          <img
          src="<?php echo get_theme_file_uri('/img/shapes/memphis-shape2-primary.png') ?>"
          alt="" />
        </div>
        <div class="shape-image shape-image-26">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/olympic-circles-two-primary.png') ?>"
            alt=""
          />
        </div>
      </div>
    </section>

    <!--latest blog and -->
    <section id="blog-latest">
      <div class="container">
        <div
          id="vclasses-headings"
          class="p-sm-5 p-2 ps-0 mt-sm-0 mt-5 text-center"
        >
          <h3 class="intro text-center">News & Blog</h3>
          <h2 class="mt-sm-2 mb-sm-5 fw-bold text-center">
            Read Our latest articles and news!
          </h2>
        </div>

        <div class="blogpost-list d-md-flex flex-wrap gap-4 pb-sm-5">
          <div class="blogpost-card p-4">
            <div class="blogpost-img">
              <a href="blogpost-page.html">
                <img
                  src="<?php echo get_theme_file_uri('/img/restaurant-workers.jpg') ?>"
                  alt=""
                  class="img-fluid"
                />
              </a>
            </div>
            <small class="attribute p-2"
              >Photo by
              <a
                href="https://unsplash.com/@camille1030?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Camille Chen</a
              >
              on
              <a
                href="https://unsplash.com/photos/people-working-near-desk-vNqE2R7hSoc?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Unsplash</a
              >
            </small>
            <div class="blogpost-card-body p-3">
              <div class="tagline mt-3 mb-3 d-flex">
                <span class="vicon-tag me-2"></span>
                <a href="tag-page.html">Business English</a>
              </div>
              <div class="author-profile d-flex mt-2 mb-3">
                <img
                  src="<?php echo get_theme_file_uri('/img/thumbs/sigmund-thumb.jpg') ?>"
                  alt="teacher's profile"
                  class="img-fluid"
                />

                <h4 class="fw-bold pt-2">Daniel Gerard</h4>
              </div>
              <h3 class="fw-bold">Key vocabulary for order taking</h3>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Quaerat harum pariatur sapiente odit quae minus?
              </p>

              <div class="author d-flex mt-4 p-2">
                <div class="events-meta">
                  <div class="meta meta-date d-flex">
                    <span class="vicon-calendar me-2"></span>
                    <p>30 October 2023</p>
                  </div>
                </div>
              </div>
              <div class="read-more mt-5 mb-3 btn btn-lg">
                <a href="blog-details.html" class="link-btn d-flex"
                  >Read more<span class="vicon-arrow--right"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="blogpost-card p-4">
            <div class="blogpost-img">
              <a href="blogpost-page.html">
                <img
                  src="<?php echo get_theme_file_uri('/img/back-to-school-opt.jpg') ?>"
                  alt=""
                  class="img-fluid"
                />
              </a>
            </div>
            <small class="attribute p-2"
              >Photo by
              <a
                href="https://unsplash.com/@nci?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >National Cancer Institute</a
              >
              on Unsplash
            </small>
            <div class="blogpost-card-body p-3">
              <div class="tagline mt-3 mb-3 d-flex">
                <span class="vicon-tag me-2"></span>
                <a href="tag-page.html">Business English</a>
              </div>
              <div class="author-profile d-flex mt-2 mb-3">
                <img
                  class="me-2 img-fluid"
                  src="<?php echo get_theme_file_uri('/img/thumbs/usman-thumb.jpg') ?>"
                  alt="teacher's profile"
                />
                <h4 class="fw-bold pt-2">John Katsimatides</h4>
              </div>
              <h3 class="fw-bold">Starting Out In English</h3>
              <p class="card-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Quaerat harum pariatur sapiente odit quae minus?
              </p>

              <div class="author d-flex mt-4">
                <div class="events-meta">
                  <div class="meta meta-date d-flex me-4">
                    <span class="vicon-calendar me-2"></span>
                    <p>22 February 2023</p>
                  </div>
                </div>
              </div>
              <div class="read-more mt-5 mb-3 btn btn-lg">
                <a href="blog-details.html" class="link-btn d-flex"
                  >Read more<span class="vicon-arrow--right"></span
                ></a>
              </div>
            </div>
          </div>
          <div class="blogpost-card p-4">
            <div class="blogpost-img">
              <a href="blogpost-page.html">
                <img
                  src="<?php echo get_theme_file_uri('/img/restaurant-workers.jpg') ?>"
                  alt=""
                  class="img-fluid"
                />
              </a>
            </div>
            <small class="attribute p-2"
              >Photo by
              <a
                href="https://unsplash.com/@camille1030?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Camille Chen</a
              >
              on
              <a
                href="https://unsplash.com/photos/people-working-near-desk-vNqE2R7hSoc?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                >Unsplash</a
              >
            </small>
            <div class="blogpost-card-body p-3">
              <div class="tagline mt-3 mb-3 d-flex">
                <span class="vicon-tag me-2"></span>
                <a href="tag-page.html">Business English</a>
              </div>
              <div class="author-profile d-flex mt-2 mb-3">
                <img
                  src="<?php echo get_theme_file_uri('/img/thumbs/sigmund-thumb.jpg') ?>"
                  alt="teacher's profile"
                  class="img-fluid"
                />

                <h4 class="fw-bold pt-2">Daniel Gerard</h4>
              </div>
              <h3 class="fw-bold">English for Caffe Staff</h3>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab modi
                accusantium excepturi voluptatibus sed praesentium natus!
              </p>

              <div class="author d-flex mt-4">
                <div class="events-meta">
                  <div class="meta meta-date d-flex me-4">
                    <span class="vicon-calendar me-2"></span>
                    <p>13 December 2023</p>
                  </div>
                </div>
              </div>
              <div class="read-more mt-5 mb-3 btn btn-lg">
                <a href="blog-details.html" class="link-btn d-flex"
                  >Read more<span class="vicon-arrow--right"></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shapes">
        <div class="shape-image shape-image-27">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geometric-1.png') ?>"
            alt="" />
        </div>
        <div class="shape-image shape-image-28">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/geometric-3-dark.png') ?>"
            alt="" />
        </div>
        <div class="shape-image shape-image-29">
          <img
            src="<?php echo get_theme_file_uri('/img/shapes/shape-circles-dark.png') ?>"
            alt="" />
        </div>
      </div>
    </section>
<?php
  get_footer();
?>