<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
<!-- code here -->
  <main class="container-fluid" id="section-main" >
    <div id="pricing-section" >
      <div class="container py-3">

    <div class="main container-fluid">
      <div class="pt-sm-5 pt-2" id="leveltest-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-3 faq-section-intro">
            <div class="col-lg-8 col-md-8 mb-4 mb-lg-0 d-lg-flex justify-content-between">
              <!-- intro -->
              <div class="intro--faq ps-0 mb-lg-3">
                <h3 class="intro">Level Test</h3>
                <h2 class="fw-bold mt-2 mb-3">Access your level!</h2>
              </div>

              </div>
            <div class="col-lg-8 col-md-8 mb-3 mb-lg-0">
            <!-- Test Filters -->
              <div
                  class="gallery-filters d-flex test-pages"
                  role="select"
                  aria-checked="false"
              >

                    <button
                      type="button"
                      class="btn test-nav-item take page me-2"
                      data-id="q-page"
                      autofocus
                    >
                      Take
                    </button>


                    <button
                      type="button"
                      class="btn test-nav-item solutions page me-2"
                      data-id="s-page"
                    >
                      Solutions
                    </button>


                    <button
                      type="button"
                      class="btn test-nav-item results page"
                      data-id="r-page"
                    >
                      My Results
                    </button>


              </div>
                <div class="subpage active mt-5" id="q-page">

                  <div class="qa my-2 py-3 col-xl-8">
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
                      <p>I didn't _____ anything; it was too dark!</p>
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
                      <p>I usually go skiing only ___ Christmas!</p>
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
                 <!-- end of subpage -->
                </div>
                <!-- new subPage-->
                <div class="subpage mt-5" id="s-page">
                  <h2>This is the solutions page</h2>

                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 1</h4>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer:</h6>
                      <p>What</p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 2</h4>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer:</h6>
                      <p>in</p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 3</h4>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer:</h6>
                      <p>didn't</p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 4</h4>
                    <div class="answer my-3">
                      <h6 class="fw-bold">Answer:</h6>
                      <p>at</p>
                    </div>
                  </div>

                </div>
              <!-- new subPage -->
                <div class="subpage mt-5" id="r-page">
                  <h2 class="mb-3">The answers you gave:</h2>
                    <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 1</h4>
                    <div class="answer my-3">
                      <p class="fw-bold">My answer: <span>What</span></p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 2</h4>
                    <div class="answer my-3">
                      <p class="fw-bold">My answer: <span>in</span></p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 3</h4>
                    <div class="answer my-3">
                      <p class="fw-bold">My answer: <span class="wrong">wasn't</span></p>
                    </div>
                  </div>
                  <div class="qa my-2 py-3 col-xl-8">
                    <h4 class="fw-bold mt-2">Question 4</h4>
                    <div class="answer my-3">
                      <p class="fw-bold">My answer: <span>at</span></p>
                    </div>
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