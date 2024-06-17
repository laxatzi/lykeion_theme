<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
 <main class="container-fluid">
      <div class="pt-5" id="faq-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-sm-5 mt-3 faq-section-intro">
            <div class="col-xl-10 col-lg-12 mb-4 mb-lg-0">
              <!-- intro -->
              <div class="intro--faq ps-0 mb-5">
                <h3 class="intro">Become a Partner</h3>
                <h2 class="fw-bold mt-2 mb-3">
                  Join forces with us and become a partner for life.
                </h2>
              </div>
              <!-- video -->
              <div class="video-presentation col-12">
                <div class="thumbnail">
                  <a
                    href="https://www.youtube.com/watch?v=-qfEOE4vtxE"
                    class="video-play-btn"
                    target="_blank"
                  >
                    <img
                      src="<?php echo get_theme_file_uri('img/icons/youtube-orange.png'); ?>"
                      alt="" />
                  </a>
                </div>
              </div>
              <small class="mx-2"
                ><a
                  href="https://www.freepik.com/free-photo/woman-man-shake-hands-partners-made-deal-created-with-generative-ai-technology_40871262.htm#query=handshake&position=4&from_view=search&track=sph"
                  >Image by atlascompany</a
                >
                on Freepik</small
              >
              <!-- form -->
              <div class="col-xl-10 col-lg-12 my-5 py-5">
                <h2 class="fw-bold mb-3">Get In Touch</h2>
                <form
                  class="mb-md-4 mb-sm-3"
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
                        type="url"
                        class="form-control py-3 mb-3"
                        name="website"
                        id="website"
                        placeholder="Company Website"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input
                        type="tel"
                        class="form-control py-3 mb-3"
                        name="telephone"
                        id="telephone"
                        placeholder="Telephone"
                      />
                    </div>
                  </div>
  <div class="row mb-4">
                    <h3 class="my-3">Languages You Teach:</h3>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="en"
                        checked
                      />
                      <label class="form-check-label" for="en"> English </label>
                    </div>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        French
                      </label>
                    </div>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        Spanish
                      </label>
                    </div>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        German
                      </label>
                    </div>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        Italian
                      </label>
                    </div>
                    <div class="form-check ms-3 my-1">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckChecked"
                      />
                      <label class="form-check-label" for="flexCheckChecked">
                        Ukrainian
                      </label>
                    </div>
                  </div>
                  <div class="row my-3">
                    <div class="col-md-12 form-group">
                      <h3 class="my-3">How many students you have?</h3>
                      <div class="form-check my-1">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="under50"
                        />
                        <label class="form-check-label" for="under50">
                          Under 50
                        </label>
                      </div>
                      <div class="form-check my-1">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="under150"
                          checked
                        />
                        <label class="form-check-label" for="under150">
                          50 to 150
                        </label>
                      </div>
                      <div class="form-check my-1">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="under300"
                        />
                        <label class="form-check-label" for="under300">
                          150 to 300
                        </label>
                      </div>
                      <div class="form-check my-1">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="over300"
                          checked
                        />
                        <label class="form-check-label" for="over300">
                          More than 300
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-12 form-group">
                      <textarea
                        class="form-control py-3 mb-3"
                        name="message"
                        id="message"
                        cols="30"
                        rows="7"
                        placeholder="Send us any message or request you have!"
                      ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input
                        type="submit"
                        value="Send Message"
                        class="btn btn-primary rounded btn-lg col-md-3 col-sm-4 col-12"
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
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
    get_footer();
?>
