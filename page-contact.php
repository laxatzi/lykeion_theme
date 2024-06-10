<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>


    <main class="container-fluid">
      <div class="pt-5" id="contact-section">
        <div class="row justify-content-center intro pt-5 pb-sm-3">
          <div class="intro--contact ps-0 mb-4 col-md-8 text-center">
            <h3 class="intro">Frequently Asked Questions</h3>
            <h2 class="fw-bold mt-2 mb-3">Get Answers Here</h2>
          </div>
        </div>
        <div class="container d-lg-flex justify-content-center">
          <div class="row">
            <div class="d-lg-flex justify-content-center">
              <div class="card-deck-wrapper">
                <div class="row">
                  <div class="card-deck d-sm-flex gap-3 my-3">
                    <div class="card p-4">
                      <div class="card-body">
                        <div class="text-center d-flex justify-content-center">
                          <img
                            src="<?php echo get_theme_file_uri('/img/icons/internet-thumb-50.png') ?>"
                            alt="" />
                        </div>
                        <h5 class="card-title text-center fw-bold py-3">
                          Our Website
                        </h5>
                        <small class="fw-bold text-center"
                          ><a
                            class="card-text my-0 text-center"
                            href="lambroshatzinikolaou.com"
                            >lambroshatzinikolaou.com</a
                          ></small
                        >
                      </div>
                    </div>
                    <div class="card p-4">
                      <div class="card-body">
                        <div class="text-center d-flex justify-content-center">
                        <img
                          src="<?php echo get_theme_file_uri('/img/icons/headphones-thumb-50.png') ?>"
                          alt=""
                          />
                        </div>
                        <h5 class="card-title text-center fw-bold py-3">
                          Call Us
                        </h5>
                        <p class="card-text my-0 text-center">2310-xxx-xxx</p>
                      </div>
                    </div>
                    <!-- end of card deck -->
                  </div>
                  <!-- end row -->
                </div>
                <div class="row">
                  <div class="card-deck d-sm-flex gap-sm-3 my-sm-3">
                    <div class="card p-4">
                      <div class="card-body">
                        <div class="text-center d-flex justify-content-center">
                          <img
                          src="<?php echo get_theme_file_uri('/img/icons/email-thumb-50.png') ?>"
                          alt="" />
                        </div>
                        <h5 class="card-title text-center fw-bold py-3">
                          Email Us
                        </h5>
                        <p class="card-text my-0 text-center">
                          email@email.com
                        </p>
                      </div>
                    </div>
                    <div class="card p-4">
                      <div class="card-body">
                        <div class="text-center d-flex justify-content-center">
                          <img
                            src="<?php echo get_theme_file_uri('/img/icons/location-thumb-50.png') ?>"
                            alt="" />
                        </div>
                        <h5 class="card-title text-center fw-bold py-3">
                          Our Address
                        </h5>
                        <p class="card-text my-0 text-center">
                          Mikras Asias 89, Pefka, Thessaloniki
                        </p>
                      </div>
                    </div>
                    <!-- card-deck end -->
                  </div>
                </div>
              </div>
              <!-- form div -->
              <div class="form-wrapper px-lg-5 mt-3">
                <form
                  class="mb-5"
                  method="post"
                  id="contactForm"
                  name="contactForm"
                >
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="name"
                        id="name"
                        placeholder="Your name"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="email"
                        id="email"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="text"
                        class="form-control py-3 mb-3"
                        name="subject"
                        id="subject"
                        placeholder="Subject"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea
                        class="form-control py-2 mb-3"
                        name="message"
                        id="message"
                        cols="30"
                        rows="7"
                        placeholder="Write your message"
                      ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input
                        type="submit"
                        value="Send Message"
                        class="btn btn-primary rounded btn-lg col-lg-5 col-md-4 col-12"
                      />
                      <span class="submitting"></span>
                    </div>
                  </div>
                </form>
                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                  Your message was sent, thank you!
                </div>
                <!-- end of form section -->
              </div>
              <!-- end of container -->
            </div>
            <!-- end of section row -->
          </div>
        </div>
        <!-- end of container -->
      </div>
      <div class="container">
        <div class="row my-lg-5">
          <div class="my-5 d-flex justify-content-center align-items-center">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115681.29592731265!2d-77.47713270775661!3d25.0326996781907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f7c99b981dbc9%3A0x2aef01d3485e50d2!2sNassau%2C%20Bahamy!5e0!3m2!1spl!2spl!4v1624445118063!5m2!1spl!2spl"
              class="w-100 my-4"
              height="400"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </main>
<?php
    get_footer();
?>
