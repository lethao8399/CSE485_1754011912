<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Again</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image: url(images/login.jpg);">
	<h1 style="margin-top: 10%; color: red;">Email or Password is not correct!</h1><br>
	<form action="checkLogin.php" method ="post" >
		<h2>Login Again</h2> <br>
		<input placeholder="Email" name="txtEmail" class="email" type="email" required=""> <br>
		<input  placeholder="Password" name="txtPass" class="pass" type="password" required="">
		<div class="md3">
			<div class="right-w3l">
				<input type="submit" name="login" id="login" value="Login">
			</div><br>
			<div class="register"><b>Do not have an account? <a href="register.php">Register</a></b></div>
		</div>
	</form>
</body>
</html>