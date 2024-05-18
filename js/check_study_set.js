document.addEventListener("DOMContentLoaded", function () {
  const demoContainer = document.querySelector("#demo");

  function fetchStudySets() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "includes/get_demo_study_sets.php", true);

    xhr.onload = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let response = JSON.parse(xhr.responseText);

          if (response.length === 0) {
            const demoWrapper = document.createElement("div");
            demoWrapper.classList.add("demo__wrapper");

            demoWrapper.innerHTML = `
              <img src="https://via.placeholder.com/150" alt="" />
              <h3>Lorem ipsum dolor sit amet consectetur.</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
                commodi.
              </p>
        
              <button type="button" class="open-modal__btn button --primary-btn" id="open-modal" onclick="modal.showModal()">
                Create study set
              </button>
            `;
            demoContainer.appendChild(demoWrapper);
            return;
          }
          displayDemoStudySet(response, demoContainer);
        } else {
          console.error("Failed to fetch study sets:", xhr.statusText);
        }
      }
    };

    xhr.send();
  }

  window.onload = fetchStudySets;
});

function displayDemoStudySet(response, demoContainer) {
  const demoCollections = document.createElement("div");
  demoCollections.classList.add("demo__collections");
  demoContainer.appendChild(demoCollections);

  response.forEach((studySet) => {
    const demoCollectionsCard = document.createElement("div");
    demoCollectionsCard.classList.add("demo-collections__card");

    demoCollectionsCard.innerHTML = `
          <p class="study-set-name">${studySet.name}</p>
          <p class="study-set-desc">${studySet.desc}</p>
          <button type="button" class="study-now button --tertiary-btn" onclick="window.location.href = 'study_set.php?id=${studySet.id}'">Study now</button>
          `;
    demoCollections.appendChild(demoCollectionsCard);
  });
}
