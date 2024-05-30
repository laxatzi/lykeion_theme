<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
<!-- code here -->
  <main class="container-fluid" id="section-main">
    <div id="pricing-section">
      <div class="container py-5">

    <div class="main container-fluid">
      <div class="pt-sm-5 pt-2" id="leveltest-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-5 faq-section-intro">
            <div class="col-lg-8 col-md-8 mb-4 mb-lg-0 d-lg-flex justify-content-between">
              <!-- intro -->
              <div class="intro--faq ps-0 mb-lg-5">
                <h3 class="intro">Level Test</h3>
                <h2 class="fw-bold mt-2 mb-3">Access your level!</h2>
              </div>

              </div>
               <div class="col-lg-8 col-md-8 mb-4 mb-lg-0">
            <!-- Test Filters -->
              <div class="gallery-filters d-flex gap-2">
                <div class="gallery-filter">
                  <button type="button" class="btn active">Take</button>
                </div>
                <div class="gallery-filter">
                  <button type="button" class="btn inactive">
                    Solutions
                  </button>
                </div>
                <div class="gallery-filter">
                  <button type="button" class="btn inactive">
                    My Results
                  </button>
                </div>
              </div>
                  <!-- <h5 class="d-flex align-items-center">Page
                    <select class="form-select page-select" aria-label="Default select example">
                      <option selected value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  of 10</h5>
                  <small>All answers must be answered or left blank in order to move to the next page.</small> -->
                <div class="subpage active mt-5" id="q-page">
                  <div class="qa my-2 py-5 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 1</h4>

                    <div class="question my-3">
                      <h6 class="fw-bold">Question</h6>
                      <p> _______'s your name? My name's John.</p>
                    </div>

                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer</h6>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Submit</span>
                        </div>
                        <input type="text" class="form-control " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <small>Enter your answer here</small>
                    </div>
                    <!-- pagination options -->
                    <div class="row level-test-pagination d-flex gap-4 ms-1 mt-5 pagination-nav">
                      <a class="col-lg-4 col-md-4  d-flex text-center align-items-center pagination-prev">
                        <p>Leave Blank</p>
                      </a>
                      <a class="col-lg-4 col-md-4 d-flex text-center align-items-center pagination-next " >
                        <p>Submit</p>
                      </a>
                    </div>
                  </div>

                <!-- end of question -->
                 <div class="qa my-2 py-5 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 2</h4>
                    <div class="question my-3">
                      <h6 class="fw-bold">Question</h6>
                      <p>My birthday is _____ May</p>
                    </div>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer</h6>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Submit</span>
                        </div>
                        <input type="text" class="form-control " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <small>Enter your answer here</small>
                    </div>
                    <!-- pagination options -->
                    <div class="row level-test-pagination d-flex gap-4 ms-1 mt-5 pagination-nav">
                      <a class="col-lg-4 col-md-4  d-flex text-center align-items-center pagination-prev">
                        <p>Leave Blank</p>
                      </a>
                      <a class="col-lg-4 col-md-4 d-flex text-center align-items-center pagination-next " >
                        <p>Submit</p>
                      </a>
                    </div>
                  </div>
                <!-- end of question -->
                  <div class="qa my-2 py-5 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 3</h4>

                    <div class="question my-3">
                      <h6 class="fw-bold">Question</h6>
                      <p>I didn't _____ anything, it was too dark!</p>
                    </div>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer</h6>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Submit</span>
                        </div>
                        <input type="text" class="form-control " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <small>Enter your answer here</small>
                    </div>
                    <!-- pagination options -->
                    <div class="row level-test-pagination d-flex gap-4 ms-1 mt-5 pagination-nav">
                      <a class="col-lg-4 col-md-4  d-flex text-center align-items-center pagination-prev">
                        <p>Leave Blank</p>
                      </a>
                      <a class="col-lg-4 col-md-4 d-flex text-center align-items-center pagination-next " >
                        <p>Submit</p>
                      </a>
                    </div>
                <!-- end of question -->
                  </div>
                  <div class="qa my-5 py-5 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 4</h4>

                    <div class="question my-3">
                      <h6 class="fw-bold">Question</h6>
                    <p>I _____ drink Champagne - only at Christmas!</p>
                    </div>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer</h6>
                      <div class="input-group ">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Submit</span>
                        </div>
                        <input type="text" class="form-control " aria-label="Default" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <small>Enter your answer here</small>
                    </div>
                    <!-- pagination options -->
                    <div class="row level-test-pagination d-flex gap-4 ms-1 mt-5 pagination-nav">
                      <a class="col-lg-4 col-md-4  d-flex text-center align-items-center pagination-prev">
                        <p>Leave Blank</p>
                      </a>
                      <a class="col-lg-4 col-md-4 d-flex text-center align-items-center pagination-next " >
                        <p>Submit</p>
                      </a>
                    </div>
                <!-- end of question -->
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
    get_footer();

?>