
  <!-- Footer section -->
    <footer class="container-fluid">
      <div class="container">
        <div class="d-lg-flex justify-content-between gap-5 align-items-start">
          <div class="social">
            <div class="social-header d-flex">
              <span class="vicon-logo-white me-1"></span>
              <h4 class="fw-bold mb-4">edu_theme</h4>
            </div>
            <div class="social-text">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse
                recusandae odio a facere beatae dolor repudiandae quod debitis
                inventore exercitationem fuga totam incidunt, quisquam sint
                blanditiis deserunt. Exercitationem illum eius quo omnis.
              </p>
            </div>
            <div class="social-icons d-flex mt-4 gap-2">
              <div class="social-icon">
                <a href="facebook.com"
                  ><img src="<?php echo get_theme_file_uri('/img/icons/icons8-facebook-50.png') ?>" alt=""
                /></a>
              </div>
              <div class="social-icon">
                <a href="twitter.com"
                  ><img src="<?php echo get_theme_file_uri('/img/icons/icons8-twitterx-50.png') ?>" alt=""
                /></a>
              </div>
              <div class="social-icon">
                <a href="linkedin.com"
                  ><img src="<?php echo get_theme_file_uri('/img/icons/icons8-linkedin-50.png') ?>" alt=""
                /></a>
              </div>
              <div class="social-icon">
                <a href="youtube.com"
                  ><img src="<?php echo get_theme_file_uri('/img/icons/icons8-youtube-50.png') ?>"  alt=""
                /></a>
              </div>
            </div>
          </div>
          <div class="footer-links d-flex">
            <h4 class="fw-bold ms-1">Explore</h4>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/blog') ?>">Blog</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/about') ?>">About Us</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php echo site_url('/testimonials') ?>"
                >Testimonials</a
              >
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="instructors.html"
                >Our Instructors</a
              >
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/pricing') ?>">Pricing Plans</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/events') ?>">Upcoming Events</a>
            </div>
          </div>
          <div class="footer-links d-flex">
            <h4 class="fw-bold ms-1">Useful</h4>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/faq') ?>">FAQ</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="members.html">Members Area</a>
            </div>
              <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/gallery') ?>">Gallery</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/terms') ?>">Terms of Use</a>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-double-right-arrow"></span>
              <a class="ms-1 fw-bold" href="<?php  echo site_url('/privacy') ?>"
                >Privacy Policy</a
              >
            </div>
          </div>
          <div class="contact d-flex">
            <h4 class="fw-bold ms-1">Contact Info</h4>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-telephone me-2"></span>
              <p>+302110111111</p>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-skype me-2"></span>
              <p>02895 81 4691</p>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-email me-2"></span>
              <p>lambros@lambroshatzinikolaou.com</p>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-geo-pin--white me-2"></span>
              <p>Mikras Asias 89, Thessaloniki, Greece</p>
            </div>
            <div class="footer-link mt-4 d-flex">
              <span class="vicon-zip me-2"></span>
              <p>57010</p>
            </div>
          </div>
        </div>
        <div class="copyright mt-5 p-5">
          <h5 class="text-center">
            <span>&copy;</span> 2023 edu_theme. Developed By
            <a href="lambroshatzinikolaou.com" style="color: #8289d8">
              Lambros Hatzinikolaou</a
            >. All Rights Reserved
          </h5>
        </div>
      </div>
    </footer>
    <div class="search-overlay search-overlay--active p-3">
      <div class="search-overlay__top">
        <div class="container">
          <span class="search-overlay__icon vicon-magnifying-glass" aria-hidden="true"></span>
          <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
          <div class="d-flex justify-content-end">
            <span  class="search-overlay__close vicon-close-modal mx-2" aria-hidden="true"></span>
          </div>
        </div>
     </div>
   </div>
<?php
  wp_footer();
?>
  </body>
</html>