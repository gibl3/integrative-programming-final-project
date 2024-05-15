document.addEventListener("DOMContentLoaded", function () {
  const demoContainer = document.querySelector("#demo");

  const naaySulod = true;
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
  }
});
