const eyeIcons = document.querySelectorAll(".eye-toggle");

eyeIcons.forEach((eyeVicon) => {
  eyeVicon.addEventListener("click", (e) => {
    eyeVicon.classList.toggle("vicon-eye-open");
  });
});

// Again
