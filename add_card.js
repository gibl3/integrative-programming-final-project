document.addEventListener("DOMContentLoaded", function () {
  const cardLimit = 3;
  let cardCount = 0;

  const cardWrapper = document.querySelector("#cards__wrapper");
  const cardBtnWrapper = document.querySelector("#card_btn-wrapper");
  const exceedsLimitModal = document.querySelector(".exceeds-limit");

  createCard(cardWrapper, false);
  cardCount++;

  cardBtnWrapper.addEventListener("click", (event) => {
    if (event.target.matches("#add-btn")) {
      if (cardCount < cardLimit) {
        createCard(cardWrapper, true);
        cardCount++;
      } else {
        exceedsLimitModal.showModal();
      }
    } else if (event.target.matches("#finish-btn")) {
      finishCard();
    }
  });
});

function createCard(cardContainer, scrollAfter = true) {
  const card = document.createElement("div");
  card.classList.add("card");
  card.innerHTML = `
  <div class="card__header">
    <h3>Demo card</h3>
    <button type="button" class="delete-card"><img id="delete-card" src="assets/images/trash-can-regular.svg" alt=""></button>
  </div>

  <div class="card__textarea-wrapper">
    <div class="card__question" id="card__question">
      <button type="button" class="question-btn button --tertiary-btn" id="question-btn">Add question</button>
      <textarea name="" placeholder="Question" id="question-textarea"></textarea>
    </div>

    <div class="line"></div>

    <div class="card__answer" id="card__answer">
      <button type="button" class="answer-btn button --tertiary-btn" id="answer-btn">Add answer</button>
      <textarea name="" placeholder="Answer" id="answer-textarea"></textarea>
    </div>
  </div>
        `;
  cardContainer.appendChild(card);

  // Event delegation for question and answer buttons
  card.addEventListener("click", function (event) {
    if (event.target.matches("#question-btn")) {
      showTextarea(event, "question");
    } else if (event.target.matches("#answer-btn")) {
      showTextarea(event, "answer");
    } else if (event.target.matches("#delete-card")) {
      card.remove();
    }
  });

  if (scrollAfter) {
    cardContainer.scrollTop = cardContainer.scrollHeight;
  }

  return card;
}

function showTextarea(event, type) {
  const button = event.target;
  const textarea = button.nextElementSibling;

  button.style.display = "none";
  textarea.style.display = "block";
  textarea.focus();
}

function finishCard() {
  const textAreas = document.querySelectorAll(".card textarea");

  // Check if all textAreas are filled
  const allFilled = Array.from(textAreas).every((textarea) =>
    textarea.value.trim()
  );

  // If any textarea is empty, show alert
  if (!allFilled) {
    alert("Please fill in all the fields.");
    return;
  }
}
