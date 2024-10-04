/*** Back to top javascript ***/

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

scrollTopButton.addEventListener("click", topFunction);
