// ********************************************************************
// # Variables
//****************************************************************** */
insertOverlayHTML();
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
  searchInput.value = "";
  queryResults.innerHTML = "";
  setTimeout(() => searchInput.focus(), 400);
  isLayer = true;
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
      typingTimer = setTimeout(getQueryResults, 650);
    } else {
      queryResults.innerHTML = "";
      isLoaderVisible = false;
    }
  }

  prevQuery = searchInput.value;
}

async function getQueryResults() {
  const searchFieldValue = searchInput.value; // Get the value from the search field

  try {
    // Define URLs for fetching data
    const urlPosts = `/wp-json/wp/v2/posts?search=${encodeURIComponent(
      searchFieldValue
    )}`;
    const urlPages = `/wp-json/wp/v2/pages?search=${encodeURIComponent(
      searchFieldValue
    )}`;
    const urlEvents = `/wp-json/wp/v2/event?search=${encodeURIComponent(
      searchFieldValue
    )}`;
    const urlCourses = `/wp-json/wp/v2/course?search=${encodeURIComponent(
      searchFieldValue
    )}`;
    const urlTutors = `/wp-json/wp/v2/tutor?search=${encodeURIComponent(
      searchFieldValue
    )}`;

    // Use Promise.all to fetch both URLs concurrently
    const [response1, response2, response3, response4, response5] =
      await Promise.all([
        fetch(urlPosts),
        fetch(urlPages),
        fetch(urlEvents),
        fetch(urlCourses),
        fetch(urlTutors),
      ]);

    // Check if both responses are OK
    if (
      !response1.ok ||
      !response2.ok ||
      !response3.ok ||
      !response4.ok ||
      !response5.ok
    ) {
      throw new Error("One or more requests failed");
    }

    // Parse the JSON responses
    const posts = await response1.json();
    const pages = await response2.json();
    const events = await response3.json();
    const courses = await response4.json();
    const tutors = await response5.json();

    // Combine the results (example: merging arrays)
    const combinedResults = [
      ...posts,
      ...pages,
      ...events,
      ...courses,
      ...tutors,
    ];

    queryResults.innerHTML = `
        <h2 class="search-overlay__section-title">Results:</h2>
        ${
          combinedResults.length
            ? `<ul class="link-list min-list">`
            : `<p>No results matches your search!</p>`
        }

          ${combinedResults
            .map(
              (publication) =>
                `<li>
                  <h3><a href="${publication.link}">${
                  publication.title.rendered
                }</a><small class="sig"> ${
                  publication.type == "post"
                    ? `by ${publication.authorName}`
                    : ""
                }</small></h3>
                  <p>${publication.excerpt.rendered}</p>
                 </li>
              `
            )
            .join("")}
      ${combinedResults.length ? `</ul>` : ""}
      `;
  } catch (error) {
    queryResults.innerHTML = `<p>Unexpected error; please try again.</p>`;
    console.error("Error fetching data:", error);
  }

  isLoaderVisible = false;
}

function insertOverlayHTML() {
  document.body.insertAdjacentHTML(
    "beforeend",
    `
    <div class="search-layer p-3">
      <div class="search-layer__top" >
        <div class="container p-1 d-flex justify-content-between">
          <div class="d-flex align-items-center" >
            <span class="search-layer__icon vicon-magnifying-glass" aria-hidden="true"></span>
          </div>
          <input type="text" class="search-query-input" placeholder=" Type a query to find what you are looking for!" id="search-query">
          <div class="d-flex align-items-center search_layer__close-div" >
            <span  class="search-layer__close vicon-close-modal" aria-hidden="true"></span>
          </div>
       </div>
     </div>
     <div class="search-layer__bottom">
       <div class="container">
        <div id="search-layer__query-results"></div>
       </div>
     </div>
   </div>
    `
  );
}
