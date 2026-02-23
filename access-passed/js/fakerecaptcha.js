// Function triggered when client clicks [Verify]
function verifyCaptcha() {
  alert("Verified!");
}

let checkboxWindow = document.getElementById("fkrc-checkbox-window");
let checkboxBtn = document.getElementById("fkrc-checkbox");
let checkboxBtnSpinner = document.getElementById("fkrc-spinner");

function addCaptchaListeners() {
  if (checkboxBtn) {
    checkboxBtn.addEventListener("click", function (event) {
      event.preventDefault();
      runClickedCheckboxEffects();
    });
  }
}
addCaptchaListeners();

function runClickedCheckboxEffects() {
  hideCaptchaCheckbox();
  setTimeout(function () {
    showCaptchaLoading();
  }, 500);
  setTimeout(function () {
    document.querySelector(".checkmark").classList.add("checked");
    checkboxBtnSpinner.style.visibility = "hidden";
  }, 2000);
}

function showCaptchaCheckbox() {
  checkboxBtn.style.width = "100%";
  checkboxBtn.style.height = "100%";
  checkboxBtn.style.borderRadius = "2px";
  checkboxBtn.style.margin = "21px 0 0 12px";
  checkboxBtn.style.opacity = "1";
}

function hideCaptchaCheckbox() {
  checkboxBtn.style.width = "4px";
  checkboxBtn.style.height = "4px";
  checkboxBtn.style.borderRadius = "50%";
  checkboxBtn.style.marginLeft = "25px";
  checkboxBtn.style.marginTop = "33px";
  checkboxBtn.style.opacity = "0";
}

function showCaptchaLoading() {
  checkboxBtnSpinner.style.visibility = "visible";
  checkboxBtnSpinner.style.opacity = "1";
}

function hideCaptchaLoading() {
  checkboxBtnSpinner.style.visibility = "hidden";
  checkboxBtnSpinner.style.opacity = "0";
}
