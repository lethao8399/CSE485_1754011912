<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/register.css">
</head>
<body style="background-image: url(images/login.jpg);">
	<h1 style="margin-top: 10% ">WELCOME TO THE REGISTER PAGE</h1>
	<form action="addRegister.php" method ="post" >
		<h2>REGISTER</h2> <br>
		<input placeholder="Username" name="txtUser" class="user" type="user" required=""> <br>
		<input placeholder="Email" name="txtEmail" class="email" type="email" required=""> <br>
		<input  placeholder="Password" name="txtPass" class="pass" type="password" required=""> <br>
		<input  placeholder="Confirm Password" name="txtConPass" class="conPass" type="password" required="">
		<div class="md3">
			<div class="right-w3l">
				<input type="submit" name="btn_register" id="register" value="Sign Up">
			</div>
		</div>
	</form>
</body>
</html>