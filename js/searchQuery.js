// ********************************************************************
// # Variables
//****************************************************************** */

const navSearch = document.querySelector(".nav-search");
const navPlus = document.querySelector(".nav-plus");
const searchLayer = document.querySelector(".search-layer");
const closeLayerButton = document.querySelector(".search_layer__close-div");
const searchInput = document.querySelector("#search-query");
let queryResults = document.querySelector("#search-layer__query-results");
// state
let isLayer = false;
let isLoaderVisible = false;
let prevQuery;
let typingTimer;

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

document.addEventListener("keydown", (e) => keyStart(e));
searchInput.addEventListener("keyup", () => showQuery());

// ********************************************************************
// # Functions
//****************************************************************** */

function openLayer() {
  searchLayer.classList.add("search-layer--active");
  document.body.classList.add("body-no-scroll");
  isLayer = true;
  setTimeout(() => searchInput.focus(), 400);
}

function closeLayer() {
  searchLayer.classList.remove("search-layer--active");
  document.body.classList.remove("body-no-scroll");
  isLayer = false;
}

function keyStart(e) {
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

function showQuery() {
  if (searchInput.value !== prevQuery) {
    clearTimeout(typingTimer);

    if (searchInput.value) {
      if (!isLoaderVisible) {
        queryResults.innerHTML = '<div class="loader"></div>';
        isLoaderVisible = true;
      }
      typingTimer = setTimeout(getQueryResults, 1000);
    } else {
      queryResults.innerHTML = "";
      isLoaderVisible = false;
    }
  }

  prevQuery = searchInput.value;
}

function getQueryResults() {
  // queryResults.innerHTML = "I am a search result!";
  const searchFieldValue = searchInput.value; // Get the value from the search field

  fetch(`/wp-json/wp/v2/posts?search=${encodeURIComponent(searchFieldValue)}`)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json(); // Parse the JSON from the response
    })
    .then((posts) => {
      queryResults.innerHTML = `
        <h2 class="search-overlay__section-title">Results:</h2>
        <ul class="link-list min-list">
          ${posts
            .map(
              (post) =>
                `<li><a href="${post.link}">${post.title.rendered}</a></li>`
            )
            .join("")}
        </ul>
      `;
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });

  isLoaderVisible = false;
}
