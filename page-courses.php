<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
    get_template_part('template-parts/banners/search-banner.php');
?>

<!-- Virtual Classe Section -->
    <section id="virtual-classes" class="container-fluid all-courses">
      <div class="container">
        <div id="virtual-classes--intro" class="d-lg-flex">
          <div
            id="vclasses-headings"
            class="ps-lg-0 p-lg-5 p-sm-3 p-2 mt-sm-0 mt-5 text-md-start text-center"
          >
            <h3 class="intro">Learn english your way!</h3>
            <h2 class="mt-2 mb-3 fw-bold">We offer the best virtual courses</h2>
          </div>
          <div id="vclasses-selections" class="p-lg-5 p-md-3 ps-0 mt-3">
            <button class="is-active vclass-tabs m-1 p-2">All</button>
            <button class="vclass-tabs m-1 p-2">Trending</button>
            <button class="vclass-tabs m-1 p-2">Popularity</button>
            <button class="vclass-tabs m-1 p-2">Featured</button>
          </div>
        </div>
        <div id="vclasses-list">
          <div class="d-sm-flex flex-wrap">
            <!-- start card display  -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/restaurant-workers.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/sigmund-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/back-to-school-opt.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/usman-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/girl-in-class-portrait.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/linkedin-sales-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/class-portrait.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/linkedin-sales-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <div class="card-img-container">
                  <img
                    src="img/shipman-portrait.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/usman-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/secretary-portrait.jpg"
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
                      src="img/icons/level-chart-thumb-16.png"
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
                      src="img/sigmund-thumb.jpg"
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
                  <div class="price price-prev">
                    <s class="ms-4"> $109.99</s>
                  </div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card p-4">
              <div class="card-img-container">
                <img
                  src="img/flags.png"
                  class="card-img-top img-fluid"
                  alt=""
                />
              </div>
              <small class="attribute p-2">
                Photo by
                <a
                  href="https://unsplash.com/@jannerboy62?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Nick Fewings</a
                >
                on
                <a
                  href="https://unsplash.com/photos/multi-colored-paper-on-brown-cardboard-box-BAZejJdZ57w?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
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

                    <span class="votes">&#40;40&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2"
                      src="img/icons/level-chart-thumb-16.png"
                      alt=""
                    />
                    <span>Advanced</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>13h 24m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">English for Interpreters</h3>
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
                      src="img/linkedin-sales-thumb.jpg"
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
                    >Enroll now <span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>
            <!-- end card -->
            <div class="card p-3">
              <div class="card-img-container">
                <img
                  src="img/english-workbook.jpg"
                  class="card-img-top"
                  alt=""
                />
              </div>
              <small class="attribute p-2">
                Image by
                <a
                  href="https://www.freepik.com/free-photo/english-book-resting-table-working-space_27301360.htm#query=IELTS&position=2&from_view=search&track=sph&uuid=df3fcb85-bce9-4b37-81bd-7114197104cf"
                  >Freepik</a
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
                      src="img/icons/level-chart-thumb-16.png"
                      alt=""
                    />
                    <span>Intermediate</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>16h 34m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">
                  Preparation for the IELTS Exam
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
                      src="img/usman-thumb.jpg"
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
            <!-- end card -->
            <div class="card p-3">
              <div class="card-img-container">
                <img src="img/cambridge.png" class="card-img-top" alt="" />
              </div>
              <small class="attribute p-2">
                Photo by
                <a
                  href="https://unsplash.com/@jeanlucbenazet?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
                  >Jean-Luc Benazet</a
                >
                on
                <a
                  href="https://unsplash.com/photos/lake-beside-building-during-daytime---UPNZyCO94?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
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

                    <span class="votes">&#40;17&#41; </span>
                  </div>
                  <button class="heart">
                    <span class="vicon-heart"></span>
                  </button>
                </div>
                <div class="info-list d-flex mt-3 mb-3">
                  <div class="info-list-level fw-bold d-flex">
                    <img
                      class="me-2"
                      src="img/icons/level-chart-thumb-16.png"
                      alt=""
                    />
                    <span>Advanced</span>
                  </div>
                  <div class="info-list-duration fw-bold d-flex">
                    <span class="vicon-duration me-2"></span>
                    <span>23h 03m</span>
                  </div>
                </div>
                <h3 class="fw-bold mb-2 mt-4">Preparation for the CAE Exams</h3>
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
                      src="img/sigmund-thumb.jpg"
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
                  <div class="price price-prev">
                    <s class="ms-4"> $109.99</s>
                  </div>
                </div>
                <div class="read-more mt-3 mb-3 btn btn-lg">
                  <a href="course-info.html" class="link-btn d-flex"
                    >Enroll now<span class="vicon-arrow--right"></span
                  ></a>
                </div>
              </div>
            </div>
            <!-- end card -->
            <!-- end flex wrap -->
          </div>
        </div>
      </div>

      <div
        class="events-pagination d-flex gap-1 container pb-5"
        style="margin: 50px auto 0px"
      >
        <div class="prev d-flex">
          <a href="">
            <span class="vicon-chevron--left"></span>
            <span class="vicon-chevron--left-white"></span>
          </a>
        </div>
        <div class="page d-flex">
          <span class="text-center"><a href="">1</a></span>
        </div>
        <div class="page d-flex">
          <span class="text-center"><a href="">2</a></span>
        </div>
        <div class="page d-flex">
          <span class="text-center"><a href="">...</a></span>
        </div>
        <div class="page d-flex">
          <span class="text-center"><a href="">6</a></span>
        </div>
        <div class="next d-flex">
          <a href=""
            ><span class="vicon-chevron--right"></span
            ><span class="vicon-chevron--right-white"></span
          ></a>
        </div>
      </div>
    </section>



<?php
    get_footer();
?>