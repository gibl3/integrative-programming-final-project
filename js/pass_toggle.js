const passwordField = document.querySelector("#password");
const passwordToggle = document.querySelector("#pass-toggle");

const confPasswordField = document.querySelector("#conf-password");
const confPasswordToggle = document.querySelector("#conf-pass-toggle");

function togglePasswordVisibility(inputField, toggleButton) {
  if (inputField.type === "password") {
    toggleButton.src = "assets/images/eye-close-svgrepo-com.svg";
    inputField.type = "text";
  } else {
    toggleButton.src = "assets/images/eye-show-svgrepo-com.svg";
    inputField.type = "password";
  }
}

passwordToggle.addEventListener("click", () => {
  togglePasswordVisibility(passwordField, passwordToggle);
});

if (confPasswordField && confPasswordToggle) {
  confPasswordToggle.addEventListener("click", () => {
    togglePasswordVisibility(confPasswordField, confPasswordToggle);
  });
}
