<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/component.css" />
  <link rel="stylesheet" href="css/create_card_demo.css" />
  <title>Create demo cards</title>
</head>

<body>
  <main class="create-cards-main">
    <section class="create-cards__wrapper" id="create-cards__wrapper">
      <div class="cards__wrapper" id="cards__wrapper">
        <!-- Cards will be added here using js -->
      </div>

      <div class="card_btn-wrapper" id="card_btn-wrapper">
        <button type="button" class="card__add-btn button --tertiary-btn" id="add-btn">Add card</button>
        <button type="button" class="card__finish-btn button --primary-btn" id="finish-btn">Finish</button>
      </div>

      </div>
    </section>

    <dialog class="exceeds-limit">
      Limit na nimo bai
    </dialog>
  </main>
</body>

<script src="add_card.js"></script>
<script src="finish_card.js"></script>

</html>