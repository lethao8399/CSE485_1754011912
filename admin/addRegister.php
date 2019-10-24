<?php
require_once("myConn.php");

if (isset($_POST["btn_register"])){
	$username = $_POST['txtUser'];
	$email = $_POST["txtEmail"];
	$password = $_POST["txtPass"];
	$conPass = $_POST["txtConPass"];

	if ($password != $conPass) {
		echo '<p align="center" style="color: red; font-size: 30px; margin-top: 10%">PASSWORD INCORRECT <br>
			<a href="register.php" style="font-size: 20px; text-align: center;">Register</a></p>';
	} else{
		$sql="SELECT * FROM users WHERE email='$email'";
		$kt=mysqli_query($conn, $sql);
		$hashed_passcode = password_hash($password, PASSWORD_DEFAULT);
		if (mysqli_num_rows($kt)  > 0) {
			echo '<p align="center" style="color: red; font-size: 30px; margin-top: 10%">ACCOUNT ALREADY EXISTS <br>
				<a href="register.php" style="margin-top: 7%;font-size: 15px; text-align: center;">Register</a></p>';
		} else {
			$sql = "INSERT INTO users(username,password,email)
			VALUES ('$username','$hashed_passcode','$email')";
			mysqli_query($conn,$sql);
			echo '<p align="center" style="color: blue; font-size: 30px; margin-top: 10%">SIGN UP SUCCESS<br>
				<a href="login.php" style="margin-top: 7%;font-size: 15px; text-align: center;">Login</a></p>';
		}
	}
}
?>