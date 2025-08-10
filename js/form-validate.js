document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const requiredForm = document.querySelectorAll(".required_form");
  const telForm = document.querySelector(".tel_form");
  const emailMessage = document.querySelector(".email_message");
  const telMessage = document.querySelector(".tel_message");
  const submitButton = document.querySelector(".submit_button");
  const emailForm = document.querySelector('input[type="email"]');

  // 初期化
  if (emailMessage && telMessage) {
    emailMessage.style.display = "none";
    telMessage.style.display = "none";
  }
  submitButton.setAttribute("disabled", true);

  // 入力すれば送信可能
  function checkRequiredFilled() {
    let allFilled = true;
    requiredForm.forEach(function (field) {
      if (field.tagName === "SELECT") {
        if (!field.value) {
          allFilled = false;
        }
      } else {
        if (!field.value.trim()) {
          allFilled = false;
        }
      }
    });


    if (allFilled) {
      submitButton.removeAttribute("disabled");
    } else {
      submitButton.setAttribute("disabled", true);
    }
  }

  // メールチェック
  function validateEmail() {
    if (emailForm && emailForm.value.trim() !== "") {
      const regexp = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!regexp.test(emailForm.value.trim())) {
        if (emailMessage) {
          emailMessage.style.display = "block";
          return false;
        }
      } else {
        if (emailMessage) emailMessage.style.display = "none";
        return true;
      }
    }
    if (emailMessage) emailMessage.style.display = "none";
    return true;
  }

  // 電話番号チェック
  function validateTel() {
    if (telForm && telForm.value.trim() !== "") {
      const regexp = /^0\d{9,10}$/;
      if (!regexp.test(telForm.value.trim())) {
        if (telMessage) {
          telMessage.style.display = "block";
          return false;
        }
      } else {
        if (telMessage) telMessage.style.display = "none";
        return true;
      }
    }
    if (telMessage) telMessage.style.display = "none";
    return true;
  }

  requiredForm.forEach(function (field) {
    field.addEventListener("input", checkRequiredFilled);
    field.addEventListener("change", checkRequiredFilled);
  });

  form.addEventListener("submit", function (e) {
    if (!validateEmail() || !validateTel()) {
      e.preventDefault();
    }
  });
  checkRequiredFilled();
});
