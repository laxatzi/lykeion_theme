const courseNav = document.querySelector(".course-nav");
const subpages = document.querySelectorAll(".subpage");
const courseNavItems = document.querySelectorAll(".course-nav-item");
const accordionButtonItems = document.querySelectorAll(".accordion-button");
const accordion = document.querySelector(".accordion");

courseNav.addEventListener("click", subpageInteraction);
// When a child element of `buttons` is clicked
function subpageInteraction(e) {
  // Check to see if its a button
  if (e.target.matches("button")) {
    // For every element in the `panels` node list use `classList`
    // to remove the active class
    courseNavItems.forEach((courseNavItem) =>
      courseNavItem.classList.remove("focused-nav-item")
    );
    subpages.forEach((subpage) => subpage.classList.remove("active"));

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
