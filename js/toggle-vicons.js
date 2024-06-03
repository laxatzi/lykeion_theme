const eyeIcons = document.querySelectorAll(".eye-toggle");

eyeIcons.forEach((eyeVicon) => {
  eyeVicon.addEventListener("click", (e) => {
    if (e.target.classList.contains("eye-toggle")) {
      eyeVicon.classList.toggle("vicon-eye-open");
    }
    console.log("clicked");
  });
});

// Again
