<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
    get_template_part("template-parts/banners/shape-banner");
?>
    <main class="container-fluid px-0">
      <div class="py-5" id="pricing-section">
        <div class="container py-5">
          <div class="row mt-5">
            <div class="col-lg-12 col-md-12 pricing-section-intro d-md-flex">
              <div class="intro--pricing ps-0">
                <h3 class="intro">Choose the right pricing plan for you</h3>
                <h2 class="fw-bold mt-2">Pricing Plans</h2>
              </div>
            </div>
          </div>
          <div class="row pricing-tables mt-5">
          <div class="container">
            <div
              class="billing-duration d-md-flex p-3 col-6 col-md-4 col-xl-2"
              role="switch"
              aria-checked="false"
            >
              <button
                data-id="yearly-page"
                type="button"
                class="btn yearly duration py-2 me-2"
              >
                Yearly
              </button>
              <button
                data-id="monthly-page"
                type="button"
                class="btn duration monthly py-2"
              >
                Monthly
              </button>
            </div>

            <div class="subpage active mt-5" id="yearly-page">
              <div class="card-deck mb-3 text-center d-lg-flex gap-xl-5 gap-2">
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      Academic Year
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;475 <small>/ Yearly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>15 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>virtual class preparation</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      IELTS Preparation
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;575<small>/ Yearly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                                                  src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"

                          src="img/icons/check-thumb-16.png"
                          alt=""
                          class="me-2"
                        />
                        <span>20 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>virtual class preparation</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      Business English
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;675<small>/ Yearly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>15 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        /><span>virtual class preparation</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        /><span>discounts for companies</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
            </div>
            <div class="subpage mt-5" id="monthly-page">
              <div class="card-deck text-center d-lg-flex gap-xl-5 gap-2">
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      Academic Year
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;57 <small>/ Monthly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>15 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>virtual class preparation</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      IELTS Preparation
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;67<small>/ Monthly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                                                  src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"

                          src="img/icons/check-thumb-16.png"
                          alt=""
                          class="me-2"
                        />
                        <span>20 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>virtual class preparation</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
                <div class="card box-shadow pb-4">
                  <div class="card-header py-4">
                    <h4 class="my-0 font-weight-normal fw-bold">
                      Business English
                    </h4>
                  </div>
                  <div class="card-body">
                    <h1 class="display-4 card-title pricing-card-title fw-bold">
                      &euro;77<small>/ Monthly</small>
                    </h1>
                    <ul
                      class="list-group list-group-flush mt-4 mb-4 text-start"
                    >
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>15 hours per week</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>free level assessment</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        />
                        <span>weekly testing</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        /><span>virtual class preparation</span>
                      </li>
                      <li>
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/check-thumb-16.png') ?>"
                          alt=""
                          class="me-2"
                        /><span>discounts for companies</span>
                      </li>
                    </ul>
                    <button
                      type="button"
                      class="btn btn-lg btn-block btn-primary my-4"
                    >
                      Get started
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php
    get_footer();
?>
<script src="<?php echo get_theme_file_uri('js/toggle-pages.js'); ?>"></script>

  </body>
</html>