// 1. Initialize state
function initSearch() {
  const resultsDiv = document.querySelector("#search-overlay__results");
  const openButtons = document.querySelectorAll(".js--search-trigger");
  const closeButton = document.querySelector(".search-overlay__close");
  const searchOverlay = document.querySelector(".search-overlay");
  const searchField = document.querySelector("#search-term");

  let state = {
    isOverlayOpen: false,
    isSpinnerVisible: false,
    previousValue: "",
    typingTimer: null,
    searchField,
    searchOverlay,
    resultsDiv,
  };

  setupEventListeners(state, openButtons, closeButton, searchField);
}

// 2. Setup event listeners
function setupEventListeners(state, openButtons, closeButton, searchField) {
  openButtons.forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault();
      state = openOverlay(state);
    });
  });

  closeButton.addEventListener("click", () => {
    state = closeOverlay(state);
  });

  document.addEventListener("keydown", (e) => {
    state = keyPressDispatcher(e, state);
  });

  searchField.addEventListener("keyup", () => {
    state = typingLogic(state);
  });
}

// 3. Typing logic
function typingLogic(state) {
  if (state.searchField.value !== state.previousValue) {
    clearTimeout(state.typingTimer);

    if (state.searchField.value) {
      if (!state.isSpinnerVisible) {
        state.resultsDiv.innerHTML = '<div class="spinner-loader"></div>';
        state.isSpinnerVisible = true;
      }

      state.typingTimer = setTimeout(() => {
        state = getResults(state);
      }, 750);
    } else {
      state.resultsDiv.innerHTML = "";
      state.isSpinnerVisible = false;
    }
  }

  state.previousValue = state.searchField.value;
  return state;
}

// 4. Get results
function getResults(state) {
  state.resultsDiv.innerHTML = "Imagine real search results here...";
  state.isSpinnerVisible = false;
  return state;
}

// 5. Key press dispatcher
function keyPressDispatcher(e, state) {
  if (
    e.keyCode === 83 && // "S" key
    !state.isOverlayOpen &&
    document.activeElement.tagName !== "INPUT" &&
    document.activeElement.tagName !== "TEXTAREA"
  ) {
    state = openOverlay(state);
  }

  if (e.keyCode === 27 && state.isOverlayOpen) {
    state = closeOverlay(state);
  }

  return state;
}

// 6. Open overlay
function openOverlay(state) {
  state.searchOverlay.classList.add("search-overlay--active");
  document.body.classList.add("body-no-scroll");
  state.searchField.value = "";

  setTimeout(() => state.searchField.focus(), 301);

  console.log("Open overlay function executed.");
  state.isOverlayOpen = true;
  return state;
}

// 7. Close overlay
function closeOverlay(state) {
  state.searchOverlay.classList.remove("search-overlay--active");
  document.body.classList.remove("body-no-scroll");

  console.log("Close overlay function executed.");
  state.isOverlayOpen = false;
  return state;
}

// Initialize the search functionality
initSearch();
