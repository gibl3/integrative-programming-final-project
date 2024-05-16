// use onclick to open and close the modal kay straightforward man
// this file contains all the modal forms to be submitted
document.addEventListener("DOMContentLoaded", modalFormSubmit);

function modalFormSubmit() {
  const modal = document.querySelector("#modal");

  modal.addEventListener("submit", function (event) {
    const target = event.target;
    event.preventDefault();

    if (target.matches("#study-set-modal-form")) {
      const formResponse = document.querySelector("#form-response");
      let formData = new FormData(target);

      makeInsertionRequest(
        formData,
        formResponse,
        "includes/demo_process.php",
        target
      );
    }
  });
}

function makeInsertionRequest(formData, formResponse, filePath, modalForm) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", filePath, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let response = JSON.parse(xhr.responseText);

        if (response.status === "error") {
          displayResponse("error", formResponse, response.message);
        } else if (response.status === "success") {
          modalForm.reset();
          displayResponse("success", formResponse, response.message);
          redirectTo("create_card_demo.php", 1800);
        }
      } else {
        console.error("Error:", xhr.status);
      }
    }
  };

  xhr.send(formData);
}

function displayResponse(responseType, element, message) {
  element.style.display = "block";
  element.classList.remove(responseType);
  element.classList.add(responseType);
  element.innerHTML = "<p>" + message + "</p>";

  setTimeout(() => {
    element.style.display = "none";
  }, 4500);
}

function redirectTo(path, time) {
  setTimeout(() => {
    window.location.href = path;
    document.querySelector("#modal").close();
  }, time);
}
