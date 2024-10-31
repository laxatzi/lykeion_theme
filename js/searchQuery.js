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

function getQueryResults() {
  const searchFieldValue = searchInput.value; // Get the value from the search field

  fetch(
    eduthemeData.root_url +
      `/wp-json/edutheme/v1/searchRoute?key=${encodeURIComponent(
        searchFieldValue
      )}`
  )
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json(); // Parse the JSON from the response
    })
    .then((searchResults) => {
      queryResults.innerHTML = `
      <div class="container">
        <div class="row">
           <div class="col-sm-4">
            <h2 class="search-overlay__section-title mt-3">Posts:</h2>
            ${
              searchResults.post.length
                ? `<ul class="link-list min-list">`
                : `<p>No results matches your search!</p>`
            }

              ${searchResults.post
                .map(
                  (publication) =>
                    `<li>
                      <h4><a href="${publication.link}">${
                      publication.title
                    }</a><small class="sig">${
                      publication.postType == "post"
                        ? `<span style="font-style: oblique;">by</span> ${publication.authorName}`
                        : ""
                    }</small></h4>
                       <img>${publication.thumbnail}</img>
                      <p class="mt-2">${publication.excerpt}</p>
                      </li>
                  `
                )
                .join("")}
            ${searchResults.post.length ? `</ul>` : ""}
           </div>
         <div class="col-sm-4">
           <h2 class="search-overlay__section-title mt-3">Courses:</h2>
            ${
              searchResults.course.length
                ? `<ul class="link-list min-list">`
                : `<p>No results matches your search!</p>`
            }
       <!-- COURSES -->
              ${searchResults.course
                .map(
                  (publication) =>
                    `<li>
                      <h4><a href="${publication.link}">${
                      publication.title
                    }</a><small class="sig">${
                      publication.postType == "post"
                        ? `by ${publication.authorName}`
                        : ""
                    }</small></h4>
                     <img>${publication.thumbnail}</img>
                      <p class="mt-2"> ${publication.excerpt}</p>
                      </li>
                  `
                )
                .join("")}
            ${searchResults.course.length ? `</ul>` : ""}

            <h2 class="search-overlay__section-title mt-3">Tutors:</h2>
               ${
                 searchResults.tutor.length
                   ? `<ul class="link-list min-list">`
                   : `<p>No results matches your search!</p>`
               }
       <!-- TUTORS -->
              ${searchResults.tutor
                .map(
                  (publication) =>
                    `
              <div class="tutor-tab mb-2">
                 <a href="${publication.link}">
                  <img>${publication.thumbnail}</img>
                 </a>
                <div class="tutor-info p-2">
                <h5>
                 <a href="${publication.link}">${publication.title}</a>
                </h5>
                <span class="desc">${publication.tutorTitle}</span>
              </div>
             </div>
                  `
                )
                .join("")}
            ${searchResults.tutor.length ? `</ul>` : ""}

         </div>
         <div class="col-sm-4">
           <h2 class="search-overlay__section-title mt-3">Events:</h2>
            ${
              searchResults.event.length
                ? `<ul class="link-list min-list">`
                : `<p>No results matches your search!</p>`
            }
       <!-- EVENTS -->
              ${searchResults.event
                .map(
                  (publication) =>
                    `<div class="event-item d-flex flex-column p-4 mb-2">
                   <div class="info-wrapper d-flex flex-column">
                    <div class="event-thumbnail me-sm-2">
                      <div class="img-wrapper-event--wide d-none d-sm-block">
                       <a href="${publication.link}">
                         <img>${publication.thumbnail}</img>
                        </a>
                      </div>
                    </div>
                  <!-- event info -->
                  <div class="event-info">
                     <h4><a href="${publication.link}">${publication.title}</a></h4>
                    <!-- event-meta -->
                    <div class="events-meta d-flex flex-column py-3">
                      <div class="meta meta-date d-flex">
                        <span class="event-vicon vicon-calendar me-2"></span>
                        <p>${publication.date} ${publication.monthName} ${publication.year}</p>

                      </div>
                      <div class="meta meta-time d-flex mt-2">
                        <span class="event-vicon vicon-time me-2"></span>
                        <p>${publication.time}</p>
                      </div>
                      <div class="meta meta-location d-flex mt-2">
                        <span class="event-vicon vicon-geo-pin me-2"></span>
                        <p>${publication.location}</p>
                      </div>
                    </div>
                    <!-- end event info -->
                  </div>
                </div>
                <div class="event-book">
                  <div class="read-more btn btn-lg col-lg-12 col-md-4 col-12">
                   <a href="${publication.link}" class="link-btn">Book your seat</a
                    >
                    <span class="vicon-arrow--right"></span>
                  </div>
                </div>
                <!-- end event item -->
              </div>`
                )
                .join("")}
            ${searchResults.event.length ? `</ul>` : ""}

         </div>
       </div>
      </div>
       `;
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });

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
