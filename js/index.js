document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger_content");
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("open");
  });
});
