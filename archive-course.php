<?php
   get_header('inner');
    get_template_part('template-parts/banners/course-banner');
?>
    <!-- Virtual Classe Section -->
    <section id="virtual-classes" class="container-fluid all-courses">
      <div class="container">
        <div id="virtual-classes--intro" class="d-lg-flex">
          <div
            id="vclasses-headings"
            class="ps-lg-0 p-lg-5 p-sm-3 p-2 mt-sm-0 mt-5 text-md-start text-center"
          >
            <h3 class="intro">Learn english your way!</h3>
            <h2 class="mt-2 mb-3 fw-bold">We offer the best virtual courses</h2>
          </div>
          <div id="vclasses-selections" class="p-lg-5 p-md-3 ps-0 mt-3">
            <button class="is-active vclass-tabs m-1 p-2">All</button>
            <button class="vclass-tabs m-1 p-2">Trending</button>
            <button class="vclass-tabs m-1 p-2">Popularity</button>
            <button class="vclass-tabs m-1 p-2">Featured</button>
          </div>
        </div>
     </div>
</section>

<?php
  get_footer();
?>
