<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <?php wp_head(); ?>
  </head>
  <body>
    <a class="back-to-top hidden" href="#" id="js--back-to-top" title="Go to top">
      <span class="vicon-back-to-top"></span>
      <span class="sr-only">Back to top</span>
    </a>
    <header class="container-fluid">
      <nav class="navbar navbar-expand-lg text-primary container p-3 ps-0">
        <div class="container-fluid">
          <a class="navbar-brand me-3 d-flex" href="index.html"
            ><span class="vicon-logo me-1"></span>
            <h4 class="fw-bold">edu_theme</h4></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon toggle-menu"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="courses.html">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Became a Student
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="leveltest.html"
                      >Level Test</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="refer.html"
                      >Refer A Friend</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="partners.html"
                      >Partner Program</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item me-2">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
          <div class="nav-plus d-flex">
            <button class="btn btn-outline btn-search" type="submit">
              <span class="vicon-search"></span>
              <!-- Search -->
            </button>
            <a href="" ms-3><span class="vicon-user"></span></a>
          </div>
        </div>
      </nav>
      <section id="hero" class="container">
        <div
          class="intro ps-sm-0 p-sm-5 p-3 mt-sm-0 mt-5 text-sm-start text-center"
        >
          <h3 class="intro">Learn english the easy way!</h3>
          <h1 class="mt-2 mb-3 fw-bold">Welcome to edu_theme!</h1>
          <p>
            We make your learning experience fun and productive. We run plenty
            of cultural, sporting and social <a href="#hop">activities</a> for
            our students.
          </p>
          <small class="attribute">
            Photo by
            <a
              href="https://unsplash.com/@icons8?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
              >Icons8 Team</a
            >
            on
            <a
              href="https://unsplash.com/photos/smiling-woman-standing-while-holding-orange-folder-FcLyt7lW5wg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash"
              >Unsplash</a
            >
          </small>
          <div id="hero-lower" class="mb-sm-3 mb-5">
            <div class="hero-arrow mt-xl-0 mt-5 d-none d-lg-block">
              <img src="<?php echo get_theme_file_uri('/img/icons/arrow.png') ?>" alt="" />
            </div>
            <div class="read-more mt-5 btn btn-lg mb-sm-3 mb-5">
              <a href="leveltest.html" class="link-btn d-flex"
                >Get started today<span class="vicon-arrow--right"></span
              ></a>
            </div>
          </div>
        </div>
        <div class="student d-none d-md-block">
          <img src="<?php echo get_theme_file_uri('/img/happy-student-nobg.png') ?>" alt="" class="m-0 img-fluid" />

        </div>
      </section>
      <!-- Shapes -->
      <div class="shapes">
        <div class="shape-image shape-image-1">
          <img src="<?php echo get_theme_file_uri('/img/shapes/geometric-3.png') ?>" />
        </div>
        <div class="shape-image shape-image-2">
          <img src="<?php echo get_theme_file_uri('/img/shapes/memphis-shape2-big.png') ?>" alt="" />
        </div>
        <div class="shape-image shape-image-3">
          <img src="<?php echo get_theme_file_uri('/img/shapes/geo-shape-transparent-15.png') ?>" alt="" />
        </div>
      </div>
    </header>

