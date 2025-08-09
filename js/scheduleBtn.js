document.addEventListener("DOMContentLoaded", function () {
  const btnDate = [
    { btn: document.getElementById("date_btn_1"), detail: document.getElementById("detail_1") },
    { btn: document.getElementById("date_btn_2"), detail: document.getElementById("detail_2") },
    { btn: document.getElementById("date_btn_3"), detail: document.getElementById("detail_3") },
  ];

  function clearActive() {
    btnDate.forEach(({btn, detail}) => {
      btn.classList.remove("active");
      detail.classList.add("hidden");
    });
  }

  btnDate.forEach(({ btn, detail }) => {
    btn.addEventListener("click", function() {
      clearActive();
      btn.classList.add("active");
      detail.classList.remove("hidden");
    });
  });

});
