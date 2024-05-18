<?php
session_start();
if ($_SESSION["demo_study_set_created"] !== "ready") {
  header("location: demo.php");
} else {
  unset($_SESSION["demo_study_set_created"]);
}

?>

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
      <div class="create-cards__header">
        <a href="demo.php" class="back">Back</a>
        <h1>Create demo cards</h1>
      </div>

      <div class="cards__wrapper" id="cards__wrapper">
        <!-- Cards will be added here using js -->
      </div>

      <div class="card_btn-wrapper" id="card_btn-wrapper">
        <button type="button" class="card__add-btn button --secondary-btn" id="add-btn">Add card</button>
        <button type="button" class="card__finish-btn button --primary-btn" id="finish-btn">Finish</button>
      </div>

    </section>

    <dialog class="exceeds-limit-modal" id="exceeds_limit_modal">
      <h3>Oops! You don't have enough card left.</h3>
      <button class="button --primary-btn" id="close-btn" onclick="exceeds_limit_modal.close()">Ok</button>
    </dialog>

    <dialog class="review-modal" id="review_modal">
      <h3>Review your cards</h3>
      <div class="review-scrollable" id="review-scrollable">
        <!-- Cards answer and question will be added here using js -->
      </div>

      <button class="button --tertiary-btn" id="close-btn" onclick="review_modal.close()">Go back</button>
      <button class="button --primary-btn" id="continue-btn">Continue</button>
    </dialog>
  </main>
</body>

<script type="module" src="js/add_card.js"></script>
<script src="js/finish_card.js"></script>
<!-- <script src="js/modal.js"></script> -->

</html>