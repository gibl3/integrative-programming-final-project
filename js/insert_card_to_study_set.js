export function makeInsertionRequest(
  fileRequestPath,
  formData,
  formResponse,
  newPage
) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", fileRequestPath, true);

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let response = JSON.parse(xhr.responseText);
        // console.log("Response: " + response);

        if (response.status === "error") {
          displayResponse("error", formResponse, response.message);
        } else if (response.status === "success") {
          displayResponse("success", formResponse, response.message);
          redirectTo(newPage, 1800);
        }
        // } else {
        //   console.error("Error:", xhr.status);
      }
    }
  };

  xhr.setRequestHeader("Content-Type", "application/json");
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
    // const modal = document.querySelector("#modal");

    if (modal) {
      modal.close();
    }
  }, time);
}
