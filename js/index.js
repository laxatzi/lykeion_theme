//import { Search } from "./modules/Search.js";
// ** words to use for the search field = layer, keyStarter

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
const searchLayer = document.querySelector(".search-overlay");
const closeLayerButton = document.querySelector(".search_overlay__close-div");
let isLayer = false;
const searchInput = document.querySelector("#search-term");

if (navSearch !== undefined && navSearch !== null) {
  navSearch.addEventListener("click", (e) => {
    e.preventDefault();
    openOverlay();
  });
} else {
  console.log("navSearch is null");
}

if (navPlus !== undefined && navPlus !== null) {
  navPlus.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("Nav plus was clicked!");
  });
} else {
  console.log("navPlus is null");
}

if (closeLayerButton !== undefined && closeLayerButton !== null) {
  closeLayerButton.addEventListener("click", () => {
    closeOverlay();
  });
} else {
  console.log("closeLayerButton is null!");
}

function openOverlay() {
  searchLayer.classList.add("search-overlay--active");
  document.body.classList.add("body-no-scroll");
  isLayer = true;
  setTimeout(() => searchInput.focus(), 400);
  console.log("our OPEN method just ran!");
}

function closeOverlay() {
  searchLayer.classList.remove("search-overlay--active");
  document.body.classList.remove("body-no-scroll");
  isLayer = false;
  console.log("our CLOSE method just ran!");
}

function keyStarter(e) {
  if (
    e.keyCode == 83 &&
    !isLayer &&
    document.activeElement.tagName != "INPUT" &&
    document.activeElement.tagName != "TEXTAREA"
  ) {
    openOverlay();
  }

  if (e.keyCode == 27 && isLayer) {
    closeOverlay();
  }
}

document.addEventListener("keydown", (e) => keyStarter(e));
