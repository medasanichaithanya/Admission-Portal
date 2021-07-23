<!DOCTYPE html>
<html>
<head>
	
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>




<div class="header">
    <a href="#default" class="logo">Connect with us and explore!</a>
</div>
    
<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="signup.php" method="POST">
	<h1>Create Account</h1>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	
	<button>SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="login.php" method="POST">
		<h1>Sign In</h1>
	<input type="text" name="name" placeholder="Name">
	<input type="password" name="password" placeholder="Password">
<?php global $error; echo $error; ?>
<br>
<br>	
<?php global $error1; echo $error1; ?>
<br>
<br>
<?php global $error2; echo $error2; ?>
<br>
<br>
	
	<a href="#">Forgot Your Password?</a>

	<button>Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start searching for your need</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>