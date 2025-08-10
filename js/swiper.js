document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".swiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: 1.2,
    spaceBetween: 20,
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
