<?php

    get_header('inner');
    get_template_part('template-parts/banners/event-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main id="virtual-classes" class="container-fluid courses">
      <div class="pt-5 container" >
        <div class="row mt-5">
          <div class="main-img">
            <img src="img/back-to-school-1300.jpg" alt="" class="rounded">
          </div>
        </div>
        <div class="row">
          <div class="course-info-main p-sm-4 p-3 mt-md-5 mt-sm-4 mt-3 ps-0 d-flex">
            <main class="p-sm-3 p-2 mb-md-0 mb-5">
              <div class="course-title">
                  <h1 class="fw-bold mt-4 mb-5"><?php the_title();?></h1>
              </div>
          <!-- main event content -->
            <div id="intro-page">
              <div class="main-event-content" id="intro">
                <h4 class="mb-3">Contest Info</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolorem nisi provident necessitatibus, explicabo, velit voluptatum animi numquam praesentium blanditiis eius. Perferendis asperiores officiis assumenda sit minima voluptatem quae repudiandae id iusto.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, nihil totam, eveniet laudantium vel itaque neque aspernatur rerum molestias dolore quis?</p>
                <h4 class="mb-3 mt-4 pt-3">What You'll Learn From This Contest</h4>
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quam nostrum facere a.</li>
                  <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, voluptates sunt.</li>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem excepturi quas maxime numquam illo sit!</li>
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, inventore!</li>
                </ul>
                <div class="pics pt-4 d-md-flex gap-3">
                  <img class="rounded mb-xl-0 mb-3" src="img/student-writes-small.jpg" alt="">

                  <img class="rounded mb-xl-0 mb-3" src="img/pen-small.jpg" alt="">
                </div>
                <div class="attribution-wrapper">
                  <small class="attribute">Photo by <a href="https://unsplash.com/@aaronburden?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Aaron Burden</a> on <a href="https://unsplash.com/photos/fountain-pen-on-black-lined-paper-y02jEX_B0O0?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                  </small>
                  <small class="attribution ms-2">Image by <a href="https://www.freepik.com/free-photo/top-view-adult-correcting-grammar-mistakes_38172100.htm#query=spelling&position=2&from_view=search&track=sph">Freepik</a></small>
                </div>
                <div class="how-to pt-4 mt-2">
                  <h3 class="fw-bold ">How the contest works</h3>
                  <ol>
                    <li>Each speller taking part in the tournament is assigned a number that indicates their spelling order. A hat is used to randomly select the numbers.</li>
                    <li>Spellers face the pronouncer and, if present, the audience while seated in numerical order. Each speller is called in turn to the front of the group, beginning with speller number one, and the pronouncer reads the word they are to spell.</li>
                    <li>The speller has the option to request that the word be repeated, that it be defined, and that it be used in a sentence. The word is then spelled by the speller. After beginning to spell the word, the speller is free to stop and start over, but neither the letters already spelled nor the order in which they were spelled can be altered.
                    </li>
                  </ol>
                </div>
              </div>

            </div>
              <!-- <?php
               // the_content();
              ?> -->
      </main>
      <aside class="d-flex flex-column event-sidebar">
            <div class="event-title">
              <h2 class="text-center fw-bold py-5">Event Details</h2>
            </div>
            <div class="event-detailing p-3">
              <!-- Event-date -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-calendar-event me-2"></span>
                  <span>Event Date</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>07/12/2023</span>
                </div>
              </div>
              <!-- event duration -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-duration me-2"></span>
                  <span>Duration</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>3h 00m</span>
                </div>
              </div>
              <!-- enrolled users so far -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-users me-2"></span>
                  <span>Enrolled So Far</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>72</span>
                </div>
              </div>
          <!-- Start Time -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-time-primary me-2"></span>
                  <span>Start Time</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>10:00</span>
                </div>
              </div>
            <!-- End Time -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-time-primary me-2"></span>
                  <span>End Time</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>13:30</span>
                </div>
              </div>
            <!-- Location -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-geo-pin--primary me-2"></span>
                  <span>Location</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>City Center</span>
                </div>
              </div>
             <!-- Price -->
              <div class="info-list d-flex mt-3 mb-3 p-3">
                <div class="info-list-level fw-bold d-flex">
                  <span class="vicon-tag--primary me-2"></span>
                  <span>Price</span>
                </div>
                <div class="info-list-duration fw-bold d-flex">

                  <span>&euro; 29</span>
                </div>
              </div>
            <!-- book seat -->
            <div class="event-action">
              <div class="book-seat btn btn-lg mt-5 col-11">
                <a href="" class="link-btn">Book your seat</a>
                <span class="vicon-arrow--right"></span>
              </div>
              <div class="share-event d-flex mt-5 align-items-start">
                <h6 class="me-3">Share:</h6>
                <a href=""><span class="vicon-x me-3"></span></a>
                <a href=""><span class="vicon-facebook me-3"></span></a>
                <a href=""><span class="vicon-youtube me-3"></span></a>
                <a href=""><span class="vicon-linkedin "></span></a>
              </div>
             </div>
            </div>
      </aside>
<!-- end of course-info-main section -->
      </div>
<!-- end row -->
    </div>
<!-- end of container -->
  </div>
</main>
  <?php
    }

    get_footer();
?>

