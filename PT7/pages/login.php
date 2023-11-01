<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/login.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<title>Login</title>
</head>
<body>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<h2 class="active"> Sign In </h2>
			<h2 class="inactive underlineHover">Sign Up </h2>

			<form action="../scripts/php/loginDataHandler.php" method="post">
				<input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required>
				<input type="email" id="email" class="fadeIn second" name="email" placeholder="Email" required>
				<input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" require>
				<input type="submit" id="submit-btn" class="fadeIn fourth" value="Log In">
			</form>

			<div id="formFooter">
			<a class="underlineHover" href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</body>
</html>