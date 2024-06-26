const testPages = document.querySelector(".test-pages");
const subPages = document.querySelectorAll(".subpage");
const pages = document.querySelectorAll(".page");
const testPagesButton = document.querySelector(".test-pages button");
const galleryFilterAll = document.querySelectorAll(".gallery-filter");

testPages.addEventListener("click", subpageInteraction);
// When a child element of `buttons` is clicked
function subpageInteraction(e) {
  // Check to see if its a button
  if (e.target.matches("button")) {
    // For every element in the `panels` node list use `classList`
    // to remove the active class
    pages.forEach((page) => page.classList.remove("focused-nav-item"));
    subPages.forEach((subpage) => subpage.classList.remove("active"));

    // "Destructure" the `id` from the button's data set
    const { id } = e.target.dataset;

    // Create a selector that will match the corresponding
    // panel with that id. We're using a template string to
    // help form the selector. Basically it says find me an element
    // with a "panel" class which also has an id that matches the id of
    // the button's data attribute which we just retrieved.
    const matchId = `.subpage[id="${id}"]`;

    // Select the `div` and, using classList, again add the
    // active class
    document.querySelector(matchId).classList.add("active");
  }
}

// toggling button
const buttons = document.querySelectorAll(".btn");

buttons.forEach((button) => {
  button.addEventListener("click", (el) => {
    const elem = el.target;
    const parent = elem.parentElement;
    const getAria = parent.getAttribute("aria-checked");
    let isAriaState = getAria === "false";

    parent.setAttribute("aria-checked", isAriaState ? true : false);
  });
});
