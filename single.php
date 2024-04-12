<?php
    get_header('inner');
    get_template_part('template-parts/post-banner');

    while(have_posts()) {
    the_post();
   ?>
    <main class="container-fluid">
      <div class="py-xl-5 pe-5 container" >
        <div class="row">
          <div class="col-lg-10 col-md-10" id="blog-details-section">
            <div class="blog-details--meta d-xl-flex mb-xl-5 mb-sm-4 mb-3 justify-content-between">
              <div class="tag text-uppercase"><a href="tag-page.html"><?php
                	// foreach((get_the_category()) as $category){
		              //  echo $category->name;
                  // }
                  echo get_the_category_list(', ');
              ?></a></div>
                <div class="meta d-xl-flex justify-content-between">
                  <div class="author-meta mb-2 d-flex align-items-center">
                    <!-- <img src="img/usman-thumb.jpg" alt=""> -->
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                     <!-- <h5 class="ms-2 mt-1"><?php // echo get_the_author_meta('nickname'); ?> </h5> -->
                     <h5 class="ms-2 mt-1"><?php  the_author_posts_link(); ?> </h5>
                  </div>
                  <div class="blogPost-date-meta d-flex align-items-center">
                    <span class="vicon-calendar"></span>
                    <h5 style="font-style:italic" class="ms-2"><?php $publish_date = get_the_time('j F, Y');
                   echo $publish_date; ?></h5>
                  </div>
                  <div class="comments-meta d-flex align-items-center">
                    <span class="vicon-comment"></span>
                    <h5 class="ms-2"> <?php echo $post->comment_count ?></h5>
                  </div>
                  <div class="time-to-read d-flex align-items-center">
                    <span class="vicon-time"></span>
                    <h5 class="ms-2"><?php echo do_shortcode('[rt_reading_time]') ?> min read</h5>
                  </div>
              <!-- end meta -->
              </div>
            </div>
            <h1 class="fw-bold"><?php the_title();?></h1>
            <?php
            the_content();
             ?>
          </div>
        </div>
      </div>
    </main>
  <?php
    }

    get_footer();
?>