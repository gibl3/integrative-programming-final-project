document.addEventListener("DOMContentLoaded", function () {
  const demoContainer = document.querySelector("#demo");

  const naaySulod = false;
  if (naaySulod) {
    for (let i = 1; i < 6; i++) {
      const demoStudySet = document.createElement("div");
      demoStudySet.classList.add("demo-study-set");

      demoStudySet.innerHTML = `
        <div>
			    demo study set ${i}
		    </div>
    `;
      demoContainer.appendChild(demoStudySet);
    }
  } else {
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
  }
});
