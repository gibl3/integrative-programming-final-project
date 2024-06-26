document
  .querySelector("#modal-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const formResponse = document.querySelector("#form-response");
    let formData = new FormData(this);

    makeInsertionRequest(formResponse, formData);
  });

function makeInsertionRequest(formResponse, formData) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "includes/demo_process.php", true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let response = JSON.parse(xhr.responseText);

        if (response.status === "error") {
          displayResponse("error", formResponse, response.message);
        } else if (response.status === "success") {
          displayResponse("success", formResponse, response.message);
          document.querySelector("#modal-form").reset();
          redirectTo("create_card_demo.php", 1800);
          // modify url to display the created study set id
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
