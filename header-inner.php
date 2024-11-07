<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <a class="back-to-top hidden" href="#" id="js--back-to-top" title="Go to top">
      <span class="vicon-back-to-top"></span>
      <span class="sr-only">Back to top</span>
    </a>
    <header class="container-fluid header-inner">
      <nav class="navbar navbar-expand-lg text-primary container p-3 ps-0">
        <div class="container-fluid">
          <a class="navbar-brand me-3 d-flex" href="<?php echo site_url(); ?>"
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
              <li <?php
                if(get_post_type() == 'course') {
                  echo 'class="current-menu-item nav-item"';
                }else {
                  echo 'class="nav-item"';
                } ?> >
                <a class="nav-link" href="<?php echo site_url('/courses') ?>">Courses</a>
              </li>

              <li <?php
                if(is_page('about')) {
                  echo 'class="current-menu-item nav-item"';
                }else {
                  echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/about') ?>">About</a>
              </li>
              <li <?php
                if(get_post_type() == 'event' || is_page('past-events')) {
                  echo 'class="current-menu-item nav-item"';
                }else {
                  echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/events') ?>">Events</a>
              </li>
              <li <?php
                if(get_post_type() == 'post') {
                  echo 'class="current-menu-item nav-item"';
                }else {
                  echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
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
                    <a class="dropdown-item" href="<?php echo site_url('/level') ?>"
                      >Level Test</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo site_url('/refer') ?>"
                      >Refer A Friend</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo site_url('/partners') ?>"
                      >Partner Program</a
                    >
                  </li>
                </ul>
              </li>

              <li <?php

                if(is_page('contact')) {
                  echo 'class="current-menu-item nav-item"';
                }else {
                  echo 'class="nav-item"';
                } ?>>
                <a class="nav-link" href="<?php echo site_url('/contact') ?>">Contact</a>
              </li>
            </ul>
          </div>
          <div class="nav-search ms-3">
            <a href="<?php echo esc_url(site_url('/search')); ?>" class="btn btn-outline btn-search" id="search-trigger js--search-trigger"><p class="sr-only">Search</p>
              <span class="vicon-search" aria-hidden="true"></span>
              <!-- Search -->
            </a>

          </div>
           <a href="<?php echo site_url('/account') ?>" class="ms-2 pb-1"><span class="vicon-user"></span></a>
        </div>
      </nav>

    </header>

