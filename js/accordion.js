const accordionButtonItems = document.querySelectorAll(".accordion-button");
const accordion = document.querySelector(".accordion");

accordion.addEventListener("click", accordionButtonInteraction);

function accordionButtonInteraction(e) {
  if (e.target.matches(".accordion-button")) {
    accordionButtonItems.forEach((accordionButtonItem) =>
      accordionButtonItem.classList.remove("focused-nav-item")
    );
  }
}
