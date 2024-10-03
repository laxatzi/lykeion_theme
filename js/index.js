//import { Search } from "./modules/Search.js";
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

//const search = new Search();

const navSearch = document.querySelector(".nav-search");
const navPlus = document.querySelector(".nav-plus");
const searchOverlay = document.querySelector(".search-overlay");

if (navSearch !== undefined && navSearch !== null) {
  navSearch.addEventListener("click", (e) => {
    e.preventDefault();
    openOverlay();
  });
} else {
  console.log("openButton is null");
}

if (navPlus !== undefined && navPlus !== null) {
  navPlus.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("Nav plus was clicked!");
  });
}

function openOverlay() {
  searchOverlay.classList.add("search-overlay--active");
  document.body.classList.add("body-no-scroll");

  console.log("our open method just ran!");
}
