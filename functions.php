<?php

  function edutheme_files() {
    wp_enqueue_style('edutheme_google_font_montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap');
    wp_enqueue_style('edutheme_bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('edutheme_main_styles', get_theme_file_uri('/css/index.css'));
    wp_enqueue_style('edutheme_vicon_styles', get_theme_file_uri('/css/vicons.css'));
  }

  add_action('wp_enqueue_scripts', 'edutheme_files');


   function wpb_hook_javascript_footer() {
?>
<script>

  const scrollTopButton = document.getElementById("js--back-to-top");

      // When the user scrolls down 350px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 350 ||
          document.documentElement.scrollTop > 350
        ) {
          scrollTopButton.style.opacity = 1;
        } else {
          scrollTopButton.style.opacity = 0;
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      scrollTopButton.addEventListener("click", topFunction)

</script>
<?php
   }
add_action('wp_footer', 'wpb_hook_javascript_footer');