document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger_content");
  hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("open");
  });

  $(function () {
    $(".hamburger_content").on("click", function () {
      $("#accordionMenu").slideToggle(300);
    });
  });

  $(window).on("resize", function () {
    if (window.innerWidth > 580) {
      $("#accordionMenu").hide();
      $(".hamburger_content").removeClass("open");
    }
  });

  $("#accordionMenu a").on("click", function () {
    $("#accordionMenu").slideUp(300);
    $(".hamburger_content").removeClass("open");
  });

});
