const PasswordField = document.querySelector("#password");
const PasswordToggle = document.querySelector("#pass-toggle");

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

PasswordToggle.addEventListener("click", () => {
  togglePasswordVisibility(PasswordField, PasswordToggle);
});

confPasswordToggle.addEventListener("click", () => {
  togglePasswordVisibility(confPasswordField, confPasswordToggle);
});
