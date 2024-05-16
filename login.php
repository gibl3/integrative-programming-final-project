<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/component.css" />
	<link rel="stylesheet" href="css/login.css" />
	<title>Document</title>
</head>

<body>
	<main>
		<form method="POST" id="form">
			<div class="form-heading">
				<h2>Login</h2>
				<p>Lorem ipsum dolor sit amet consectetur.</p>
			</div>

			<div class="input-field">
				<input type="email" placeholder="Email" name="email" />
				<div class="pass-input">
					<input type="password" placeholder="Password" id="password" name="password" />
					<img src="assets/images/eye-show-svgrepo-com.svg" id="pass-toggle" class="pass-toggle" />
				</div>
				<a href="" class="forgot-password">Forgot password?</a>
			</div>

			<div class="form-response" id="form-response"></div>

			<div class="btn-wrapper">
				<a href="index.php" class="form-back-btn">Back</a>
				<input type="submit" value="Login" class="button --primary-btn" />
			</div>
		</form>
	</main>

	<script src="js/pass_toggle.js"></script>
	<script type="module" src="js/login_request.js"></script>
</body>

</html>