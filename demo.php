<?php
include_once "includes/header.php";
?>

<main class="demo-main">
	<section class="demo">
		<div class="demo__wrapper">
			<img src="https://via.placeholder.com/150" alt="" />
			<h3>Lorem ipsum dolor sit amet consectetur.</h3>
			<p>
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa,
				commodi.
			</p>

			<button type="button" class="open-modal__btn button --primary-btn" id="open-modal">
				Create study set
			</button>
		</div>
	</section>

	<dialog id="modal" class="modal">
		<div class="demo__modal-wrapper">
			<div class="modal-header">
				<h3>Create study set</h3>
				<button type="button" class="close-btn" id="close-btn">
					<img src="assets/images/circle-xmark-regular.svg" alt="">
				</button>
			</div>

			<form method="POST" id="modal-form">
				<input name="study_set_name" type="text" placeholder="Study set name">
				<textarea name="desc" id="" placeholder="Description"></textarea>

				<div class="form-response" id="form-response"></div>

				<input type="submit" value="Create" class="create-btn button --secondary-btn" id="create-btn">
			</form>
		</div>
	</dialog>
</main>

<script src="js/nav_indicator.js"></script>
<script src="js/modal.js"></script>
<script src="js/demo_request.js"></script>
</body>

</html>