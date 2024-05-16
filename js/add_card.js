// set the limit to 5
// track the card count

// create initial card

// add click event to the parent btn wrapper

// check if the card count is less than the limit
// if yes, create a new card
// if exceeds, show modal

// finish btn is clicked
// check if all textareas are filled
// if not, show alert modal
// if yes, show review modal
// if review modal continue btn is clicked, submit form

const cardLimit = 3;
let cardCount = 1;

document.addEventListener("DOMContentLoaded", () => {
  const cardWrapper = document.querySelector("#cards__wrapper");
  const cardBtnWrapper = document.querySelector("#card_btn-wrapper");
  const exceedsLimitModal = document.querySelector("#exceeds_limit_modal");

  createCard(cardWrapper, false);

  cardBtnWrapper.addEventListener("click", (event) => {
    if (event.target.matches("#add-btn")) {
      if (cardCount < cardLimit) {
        cardCount++;
        createCard(cardWrapper, true);
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
      <div class="card__question">
        <button type="button" class="question-btn button --tertiary-btn" id="question-btn">Add question</button>
        <textarea name="" placeholder="Question" class="question-textarea"></textarea>
      </div>

      <div class="line"></div>

      <div class="card__answer">
        <button type="button" class="answer-btn button --tertiary-btn" id="answer-btn">Add answer</button>
        <textarea name="" placeholder="Answer" class="answer-textarea"></textarea>
      </div>
    </div>`;
  cardContainer.appendChild(card);

  // Event delegation for question and answer buttons
  card.addEventListener("click", (event) => {
    if (event.target.matches("#question-btn")) {
      showTextarea(event);
    } else if (event.target.matches("#answer-btn")) {
      showTextarea(event);
    } else if (event.target.matches("#delete-card")) {
      if (cardCount > 1) {
        card.remove();
        cardCount--;
      } else {
        alert("You must have at least one card.");
      }
    }
  });

  if (scrollAfter) {
    cardContainer.scrollTop = cardContainer.scrollHeight;
  }

  return card;
}

function showTextarea(event) {
  const button = event.target;
  const textarea = button.nextElementSibling;

  button.style.display = "none";
  textarea.style.display = "block";
  textarea.focus();
}

function finishCard() {
  const cards = document.querySelectorAll(".card");
  const textAreas = document.querySelectorAll(".card textarea");
  const allFilled = Array.from(textAreas).every((textarea) =>
    textarea.value.trim()
  );
  const reviewModal = document.querySelector("#review_modal");
  const reviewScrollable = document.querySelector("#review-scrollable");

  // If any textarea is empty, show alert
  if (!allFilled) {
    alert("Please fill in all the question fields.");
  } else {
    const cardInfo = getQuestionAnswerPairs(cards);

    cardInfo.forEach((pair) => {
      const reviewCard = document.createElement("div");
      reviewCard.classList.add("review-card");
      reviewCard.innerHTML = `
        <div class="review-card-content">
          <p class="review-question">Question: ${pair.question}</p>
          <p class="review-answer">Answer: ${pair.answer}</p>
        </div>
      `;
      reviewScrollable.appendChild(reviewCard);
    });

    reviewModal.showModal();
  }
}

function getQuestionAnswerPairs(cards) {
  const pairs = [];

  // Iterate through each card element
  cards.forEach((card) => {
    // Get the question and answer textareas within the card
    const questionTextarea = card.querySelector(".question-textarea");
    const answerTextarea = card.querySelector(".answer-textarea");

    // Extract values and push to pairs array
    pairs.push({
      question: questionTextarea.value,
      answer: answerTextarea.value,
    });
  });

  return pairs;
}
