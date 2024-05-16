import { makeInsertionRequest } from "./xhr_insert_request.js";

document.querySelector("#form").addEventListener("submit", function (event) {
  event.preventDefault();

  const formResponse = document.querySelector("#form-response");
  const formData = new FormData(this);

  makeInsertionRequest(
    "includes/login_process.php",
    formData,
    formResponse,
    this,
    "dashboard.php"
  );
});
