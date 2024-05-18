<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/componentV2.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <title>Donstudy</title>
</head>

<body>
  <main>
    <header class="study-set__header">
      <!-- <img src="assets/images/logo-dark.svg" alt="" class="logo"/> -->
      <h3 class="h3-size">Study sets</h3>

      <div class="btn--gap flex flex--row">
        <button class="btn btn--tertiary">Create study set</button>
        <button class="btn btn--tertiary">Logout</button>
      </div>
    </header>

    <section class="study-set flex flex--col">
      <div class="study-set__collection flex flex--col">
        <div class="initial-CTA flex flex--col">
          <img src="https://via.placeholder.com/150" alt="" />

          <div class="initial-CTA__info flex flex--col">
            <h3 class="h3-size">Lorem ipsum dolor sit amet consectetur.</h3>
            <p class="default-line-height">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
              commodi.
            </p>
          </div>

          <button type="button" class="btn open-modal__btn btn--primary" id="open-modal" onclick="modal.showModal()">
            Create study set
          </button>
        </div>
      </div>
    </section>

    <dialog id="modal" class="modal modal--submit">
      <div class="modal__header modal__header--pri">
        <h3 class="h3-size">Create study set</h3>
        <button type="button" class="btn btn--icon" onclick="modal.close()">
          <img src="assets/images/circle-xmark-regular.svg" class="btn__icon--small" alt="">
        </button>
      </div>

      <form method="POST" id="study-set-modal-form">
        <input name="study_set_name" type="text" placeholder="Study set name">
        <textarea name="desc" id="" placeholder="Description"></textarea>

        <div class="form-response" id="form-response"></div>

        <input type="submit" value="Create" class="create-btn button --secondary-btn" id="create-btn">
      </form>
    </dialog>
  </main>
</body>

</html>