<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta ame="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<!-- navbar -->
	<nav class="navbar">
		<ul class="navbar-body">
			<li><a href="#" target="_blank" class="hyperlink">Home</a></li>
			<li><a href="#" target="_blank" class="hyperlink">Sign Up</a></li>
			<li><a href="#" target="_blank" class="hyperlink">Login</a></li>
		</ul>
	</nav>
	<!-- navbar end -->

	<!-- Sign up form -->
	<section class="container">
		<div class="form">
		  <h2 class="form-head">Sign Up</h2>
			<form class="form-input" action="input.php" method="post">
				<label for="username">Username</label><br>
				<input type="text" name="username" id="username" class="input-box">
				<br>
				<label for="email">Email</label><br>
				<input type="email" name="email" id="email" class="input-box">
				<br>
				<label for="password">Password</label><br>
				<input type="password" name="password" id="password" class="input-box">
				<br>
				<button id="button" class="cta">Submit</button>
				<br>
				<div class="option">
					<p>Do you have an account ? <a href="#">Login here</a></p>
				</div>
			</form> 
		</div>
	</section>
	<!-- sign up form end -->
</body>
</html>