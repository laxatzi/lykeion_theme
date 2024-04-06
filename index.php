<?php
  get_header();
  get_template('template-parts/page-banner.php');
  ?>
 <main class="container-fluid">
       <div class="py-5 pe-5 container" >
        <div class="row mt-5">
         <aside class="col-xl-4">
          <div class="aside-div blog-search p-4 mb-4">
            <div class="aside-title py-3">
              <h3>Search Post</h3>
            </div>
            <div class="aside-content py-4">
            <div class="input-group mb-3 d-flex align-items-center">
              <input type="search" class="form-control p-2" aria-label="Search keyword">
              <div class="input-group-append">
                <span class="input-group-search p-2 fw-bold">Search</span>
              </div>
            </div>
            </div>
          </div>

          <div class="aside-div latest-posts p-4 my-4">
            <div class="aside-title py-3">
              <h3>Latest Posts</h3>
            </div>
            <div class="aside-content ">

              <div class="latest-post-item d-flex py-4">
                <div class="latest-post-img">
                  <img
                  <?php echo get_theme_file_uri('/img/pen-small-70.jpg') ?>
                  alt="">
                </div>
                <div class="latest-post-info">
                  <div class="latest-post-date">
                   <small>16 November 2023</small>
                  </div>
                  <div class="latest-post-title">
                    <a href="blog-details.html"><h5 class="fw-bold">Tips on How to Improve English Writing Skills
                    </h5></a>
                  </div>
                  <small class="attribute">Photo by <a href="https://unsplash.com/@aaronburden?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Aaron Burden</a> on <a href="https://unsplash.com/photos/fountain-pen-on-black-lined-paper-y02jEX_B0O0?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                  </small>
                </div>
              </div>
            <!-- end of latest-post-item -->
              <div class="latest-post-item d-flex py-4">
                <div class="latest-post-img">
                  <img
                    src="<?php echo get_theme_file_uri('/img/woman-talking-on-phone-post.jpg') ?>" alt="">
                </div>
                <div class="latest-post-info">
                  <div class="latest-post-date">
                   <small>12 November 2023</small>
                  </div>
                  <div class="latest-post-title">
                    <a href="blog-details.html"><h5 class="fw-bold">
                      How to improve your spoken English: 8 tips
                    </h5></a>
                  </div>
                  <small class="attribute">Photo by <a href="https://unsplash.com/@joycebusola?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Joyce Busola</a> on <a href="https://unsplash.com/photos/woman-in-white-dress-shirt-L9U5UUScnHY?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                  </small>
                </div>
              </div>
            <!-- end of latest-post-item -->
             <div class="latest-post-item d-flex py-4">
                <div class="latest-post-img">
                  <img src="<?php echo get_theme_file_uri('/img/girl-in-class-portrait-post.jpg') ?>" alt="">
                </div>
                <div class="latest-post-info">
                  <div class="latest-post-date">
                   <small>07 November 2023</small>
                  </div>
                  <div class="latest-post-title">
                    <a href="blog-details.html"><h5 class="fw-bold">
                      The Past Perfect Tense
                    </h5></a>
                  </div>
                  <small class="attribute">Photo by <a href="https://unsplash.com/@javotrueba?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">javier trueba</a> on <a href="https://unsplash.com/photos/woman-carrying-white-and-green-textbook-iQPr1XkF5F0?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                  </small>
                </div>
              </div>
            <!-- end of latest-post-item -->
            </div>
          </div>

          <div class="aside-div blog-categories p-4 my-4">
            <div class="blog-categories-item">
            <!-- aside title -->
              <div class="aside-title py-3">
                <h3>Categories</h3>
              </div>
             <!-- aside content -->
              <div class="aside-content py-4">
                <div class="categories">
              <!-- the category -->
                <a class="the-category d-flex px-3 py-2 mb-3">
                  <div class="category-name p-2">Exams</div>
                  <div class="category-sub-number p-2">(5)</div>
                </a>
              <!-- the category -->
                <a class="the-category d-flex px-3 py-2 my-3">
                    <div class="category-name p-2">Grammar</div>
                    <div class="category-sub-number p-2">(3)</div>
                </a>
              <!-- the category -->
                 <a class="the-category d-flex px-3 py-2 my-3">
                   <div class="category-name p-2">Learning</div>
                   <div class="category-sub-number p-2">(4)</div>
                 </a>
              <!-- the category -->
                 <a class="the-category d-flex px-3 py-2 my-3">
                   <div class="category-name p-2">Practice</div>
                   <div class="category-sub-number p-2">(2)</div>
                 </a>
              <!-- the category -->
                 <a class="the-category d-flex px-3 py-2 mt-3">
                   <div class="category-name p-2">Miscellaneous</div>
                   <div class="category-sub-number p-2">(1)</div>
                 </a>
                 </div>
               </div>
             </div>
           </div>

          <div class="aside-div blog-tags p-4 my-4">
            <div class="aside-title py-3">
              <h3>Tags</h3>
            </div>
            <div class="aside-content py-4">
              <div class="tag-wrapper d-flex flex-wrap">
                <div class="the-tag p-2 m-2">
                  <a href="">Phrasal Verbs</a>
                </div>
                 <div class="the-tag p-2 m-2">
                  <a href="">Grammar</a>
                </div>
                <div class="the-tag p-2 m-2">
                  <a href="">Modal Verbs</a>
                </div>
                <div class="the-tag p-2 m-2">
                  <a href="">IELTS</a>
                </div>
                <div class="the-tag p-2 m-2">
                  <a href="">Exams</a>
                </div>
                <div class="the-tag p-2 m-2">
                  <a href="">Daily Practice</a>
                </div>

              </div>
            </div>
          </div>

          <div class="aside-div insta-feed p-4 mt-5">
            <div class="aside-title py-3">
              <h3>Instagram Feed</h3>
            </div>
            <div class="aside-content py-4">
              <div class="img-wrapper d-flex justify-content-center align-items-center">
                <img
                src="<?php echo get_theme_file_uri('/img/insta-feed-thumbnail.jpg') ?>" alt="instagram feed">
              </div>
            </div>
            <small class="attribute">Image by <a href="https://www.freepik.com/free-psd/flat-design-school-admission-instagram-posts_43373373.htm#query=instagram%20feed%20students&position=44&from_view=search&track=ais">Freepik</a></small>
          </div>

         </aside>
         <main class="col-xl-7 me-4" >
          <div class="the-blogPost"  >
          <!-- image -->
            <div class="blogPost-image">
              <img
              src="<?php echo get_theme_file_uri('/img/woman-reading-in-the-bus.jpg') ?>" alt="">
            </div>
            <small class="attribute">Image by <a href="https://www.freepik.com/free-photo/medium-shot-woman-reading-book_14960771.htm#page=2&query=school%20students%20in%20a%20bus&position=27&from_view=search&track=ais">Freepik</a>
            </small>
          <!-- meta -->
            <div class="blogPost-meta px-4 pt-sm-3 d-sm-flex align-items-center justify-content-between my-4">
              <div class="blogPost-views d-flex align-items-center">
                <span class="vicon-views"></span>
                <h5> 123 Views</h5>
              </div>
              <div class="blogPost-comments d-flex align-items-center">
                <span class="vicon-comment"></span>
                <h5>07 Comments</h5>
              </div>
              <div class="blogPost-date d-flex align-items-center">
                <span class="vicon-calendar"></span>
                <h5>12 December, 2023</h5>
              </div>
            </div>
           <!-- title -->
           <div class="blogPost-title px-4 mb-4">
            <a href="blog-details.html">
              <h2 class="fw-bold">Learning For Busy Adults. The Time Chunking Method</h2>
            </a>
           </div>
           <!-- content -->
           <div class="blogPost-content px-4 pb-4">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur consequatur culpa consectetur facere aperiam ex nostrum tempore, ipsam eius ipsum a id ducimus porro. Ipsam dolor laborum doloribus aspernatur deleniti!</p>

              <div class="read-more mt-3 mb-3 btn btn-lg col-md-4 col-sm-12">
                <a href="blog-details.html" class="link-btn">Read More</a>
                <span class="vicon-arrow--right"></span>
              </div>
            </div>
          <!-- end of blogPost -->
          </div>

           <div class="the-blogPost">
          <!-- image -->
            <div class="blogPost-image">
              <img src=" <?php echo get_theme_file_uri('/img/london-bridge-blogpost.jpg') ?>" alt="">
            </div>
           <small class="attribute">
              Photo by <a href="https://unsplash.com/@charlespostiaux?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Charles Postiaux</a> on <a href="https://unsplash.com/photos/london-bridge-london-Q6UehpkBSnQ?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
           </small>
          <!-- meta -->
            <div class="blogPost-meta px-4 pt-sm-3 d-sm-flex align-items-center justify-content-between my-4">
              <div class="blogPost-views d-flex align-items-center">
                <span class="vicon-views"></span>
                <h5> 153 Views</h5>
              </div>
              <div class="blogPost-comments d-flex align-items-center">
                <span class="vicon-comment"></span>
                <h5>09 Comments</h5>
              </div>
              <div class="blogPost-date d-flex align-items-center">
                <span class="vicon-calendar"></span>
                <h5>02 December, 2023</h5>
              </div>
            </div>
           <!-- title -->
           <div class="blogPost-title px-4 mb-4">
            <a href="blog-details.html">
              <h2 class="fw-bold">Learn A Language While Traveling</h2>
            </a>
           </div>
           <!-- content -->
           <div class="blogPost-content px-4 pb-4">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur consequatur culpa consectetur facere aperiam ex nostrum tempore, ipsam eius ipsum a id ducimus porro. Ipsam dolor laborum doloribus aspernatur deleniti!</p>

              <div class="read-more mt-3 mb-3 btn btn-lg col-md-4 col-sm-12">
                <a href="blog-details.html" class="link-btn">Read More</a>
                <span class="vicon-arrow--right"></span>
              </div>
            </div>
          <!-- end of blogPost -->
          </div>

           <div class="the-blogPost">
          <!-- image -->
            <div class="blogPost-image">
              <img
              src="<?php echo get_theme_file_uri('/img/woman-in-train-with-mobile.jpg') ?>"
              alt="">
            </div>
            <small class="attribute">Image by <a href="https://www.freepik.com/free-photo/low-view-female-passenger-listening-music_11142440.htm#query=traveler%20in%20train&position=8&from_view=search&track=ais">Freepik</a>
            </small>
          <!-- meta -->
            <div class="blogPost-meta px-4 pt-sm-3 d-sm-flex align-items-center justify-content-between my-4">
              <div class="blogPost-views d-flex align-items-center">
                <span class="vicon-views"></span>
                <h5> 223 Views</h5>
              </div>
              <div class="blogPost-comments d-flex align-items-center">
                <span class="vicon-comment"></span>
                <h5>17 Comments</h5>
              </div>
              <div class="blogPost-date d-flex align-items-center">
                <span class="vicon-calendar"></span>
                <h5>11 November, 2023</h5>
              </div>
            </div>
           <!-- title -->
           <div class="blogPost-title px-4 mb-4">
            <a href="blog-details.html">
              <h2 class="fw-bold">The Battle Of Language Learning Mobile Apps</h2>
            </a>
           </div>
           <!-- content -->
           <div class="blogPost-content px-4 pb-4">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur consequatur culpa consectetur facere aperiam ex nostrum tempore, ipsam eius ipsum a id ducimus porro. Ipsam dolor laborum doloribus aspernatur deleniti!</p>



              <div class="read-more mt-3 mb-3 btn btn-lg col-md-4 col-sm-12">
                <a href="blog-details.html" class="link-btn">Read More</a>
                <span class="vicon-arrow--right"></span>
              </div>
            </div>
          <!-- end of blogPost -->
          </div>
          <nav>
            <div class="events-pagination d-flex gap-1 container">
              <div class="prev d-flex">
                <a href="">
                  <span class="vicon-chevron--left"></span>
                  <span class="vicon-chevron--left-white"></span>
                </a>
              </div>
              <div class="page d-flex">
                <span class="text-center"><a href="">1</a></span>
              </div>
              <div class="page d-flex">
                <span class="text-center"><a href="">2</a></span>
              </div>
              <div class="page d-flex">
                <span class="text-center"><a href="">...</a></span>
              </div>
              <div class="page d-flex">
                <span class="text-center"><a href="">6</a></span>
              </div>
              <div class="next d-flex">
                <a href=""
                  ><span class="vicon-chevron--right"></span
                  ><span class="vicon-chevron--right-white"></span
                ></a>
              </div>
            </div>
           </nav>
         </main>

        </div>
       </div>
     </main>
<?php
  get_footer();
?>