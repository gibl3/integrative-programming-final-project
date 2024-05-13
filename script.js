document.addEventListener("DOMContentLoaded", function () {
  const cardContainer = document.querySelector("#create-cards__wrapper");
  const addCardButton = document.querySelector("#add-card");
  let cardLimit = 9;
  let cardCount = 0;

  addCardButton.addEventListener("click", function () {
    if (cardCount < cardLimit) {
      const card = createCard(cardContainer, true);
      cardCount++;

      const addQuestionButton = card.querySelector(".add_question");
      const addAnswerButton = card.querySelector(".add_answer");

      const questionField = card.querySelector("#question textarea");
      const answerField = card.querySelector("#answer textarea");

      addQuestionButton.addEventListener("click", function () {
        this.style.display = "none";
        questionField.style.display = "block";
      });

      addAnswerButton.addEventListener("click", function () {
        this.style.display = "none";
        answerField.style.display = "block";
      });
    } else {
      alert("You can only add 5 cards maximum.");
    }
  });
});

function createCard(cardContainer, ambot = false) {
  const card = document.createElement("div");
  card.classList.add("card");
  card.innerHTML = `
          <button class="delete-card"><img src="" alt="">x</button>
          <div class="question" id="question">
            <textarea name="" placeholder="Question"></textarea>
            <button type="button" class="add_question button --tertiary-btn" id="add-question">Add question</button>
          </div>

          <div class="line"></div>

          <div class="answer" id="answer">
            <textarea name="" placeholder="Answer"></textarea>
            <button type="button" class="add_answer button --tertiary-btn" id="add-answer">Add answer</button>
          </div>
        `;
  cardContainer.appendChild(card);
  card.style.marginBlock = "1em";

  if (ambot) {
    cardContainer.scrollTop = cardContainer.scrollHeight;
  }

  return card;
}

document.querySelector("#add-question").addEventListener("click", function () {
  const questionField = document.querySelector("#question textarea");
  this.style.display = "none";
  questionField.style.display = "block";
});

document.querySelector("#add-answer").addEventListener("click", function () {
  const answerField = document.querySelector("#answer textarea");
  this.style.display = "none";
  answerField.style.display = "block";
});
