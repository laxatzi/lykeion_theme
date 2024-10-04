// ********************************************************************
// # Variable
//****************************************************************** */

const navSearch = document.querySelector(".nav-search");
const navPlus = document.querySelector(".nav-plus");
const searchLayer = document.querySelector(".search-layer");
const closeLayerButton = document.querySelector(".search_layer__close-div");
let isLayer = false;
const searchInput = document.querySelector("#search-query");

// ********************************************************************
// # Events
//****************************************************************** */

if (navSearch !== undefined && navSearch !== null) {
  navSearch.addEventListener("click", (e) => {
    e.preventDefault();
    openLayer();
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
    closeLayer();
  });
} else {
  console.log("closeLayerButton is null!");
}

document.addEventListener("keydown", (e) => keyStarter(e));

// ********************************************************************
// # Functions
//****************************************************************** */

function openLayer() {
  searchLayer.classList.add("search-layer--active");
  document.body.classList.add("body-no-scroll");
  isLayer = true;
  setTimeout(() => searchInput.focus(), 400);
  console.log("our OPEN method just ran!");
}

function closeLayer() {
  searchLayer.classList.remove("search-layer--active");
  document.body.classList.remove("body-no-scroll");
  isLayer = false;
  console.log("our CLOSE method just ran!");
}

function keyStarter(e) {
  if (
    e.key == "s" &&
    !isLayer &&
    document.activeElement.tagName != "INPUT" &&
    document.activeElement.tagName != "TEXTAREA"
  ) {
    openLayer();
  }

  if (e.key == "Escape" && isLayer) {
    closeLayer();
  }
}
