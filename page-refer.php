<?php

    get_header('inner');
    get_template_part('template-parts/banners/page-banner');
?>
    <main class="container-fluid">
      <div class="pt-5" id="faq-section">
        <div class="container pt-5 pb-5">
          <div class="row mt-5 faq-section-intro">
            <div class="col-lg-10 col-md-12 mb-4 mb-lg-0">
              <!-- intro -->
              <div class="intro--faq ps-0 mb-5">
                <h3 class="intro">Refer a Friend</h3>
                <h2 class="fw-bold mt-2 mb-3">
                  You and your friend gain a reward!
                </h2>
              </div>
              <!-- video -->
              <div class="video-presentation refer col-lg-12 col-md-12">
                <div class="thumbnail">
                  <a
                    href="https://www.youtube.com/watch?v=-qfEOE4vtxE"
                    class="video-play-btn"
                    target="_blank"
                  >
                    <img src="img/icons/youtube-orange.png" alt="" />
                  </a>
                </div>
              </div>
              <small class="mx-2"
                ><a
                  href="https://www.freepik.com/free-photo/portrait-couple-gorgeous-hispanic-female-friends-hanging-out-school_27508193.htm#query=two%20student%20friends&position=9&from_view=search&track=ais"
                  >Image by tonodiaz</a
                >
                on Freepik</small
              >
              <!-- steps -->
              <div class="accordion my-5" id="accordionExample">
                <h3 class="my-3 fw-bold">How To Refer</h3>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      Tell a friend
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong
                        >Got a friend who would like to learn a second
                        language?</strong
                      >
                      <p>
                        Refer them to Edu_Theme and we will take &euro;45 off
                        both your bills.
                      </p>
                      <p>
                        You may bring them along with you or just provide them
                        with a link to our website, social accounts or just give
                        them our phone number.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Your friend join our school
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong>
                      It is hidden by default, until the collapse plugin adds
                      the appropriate classes that we use to style each element.
                      These classes control the overall appearance, as well as
                      the showing and hiding via CSS transitions. You can modify
                      any of this with custom CSS or overriding our default
                      variables. It's also worth noting that just about any HTML
                      can go within the <code>.accordion-body</code>, though the
                      transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      You and your friends get a &euro;45 reward.
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong>
                      It is hidden by default, until the collapse plugin adds
                      the appropriate classes that we use to style each element.
                      These classes control the overall appearance, as well as
                      the showing and hiding via CSS transitions. You can modify
                      any of this with custom CSS or overriding our default
                      variables. It's also worth noting that just about any HTML
                      can go within the <code>.accordion-body</code>, though the
                      transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
              <!-- form -->
              <div class="col-md-12 my-5">
                <h2 class="fw-bold my-3">Refer a Friend</h2>
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
                        placeholder="Your Email"
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
                        placeholder="Your Friends Email"
                      />
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
                        value="Send Referral"
                        class="btn btn-primary rounded btn-lg col-md-3 com-sm-4 col-12"
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
              <!-- start referral tos -->
              <div class="col-md-12 mb-5 mt-1">
                <h3>Referral Plan Terms and Conditions</h3>
                <ol>
                  <li class="list-item">Not applicable with any other offer</li>
                  <li class="list-item">
                    Referred party can only receive €45 off
                  </li>
                  <li class="list-item">Virtual Classes are excluded</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php
    get_footer();
?>

