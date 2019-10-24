<?php 
$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];

require_once("myConn.php");

$sql = "SELECT * FROM users WHERE email = '$email'";
if (mysqli_query($conn,$sql)) {
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	if (password_verify($pass, $row['password'])) {
		session_start();
		$_SESSION['email'] = $email;
		if ($email == 'anville1999@gmail.com') {
			header("Location:admin.php");
		} else {
			echo '<p align="center" style="color: red; font-size: 30px; margin-top: 10%">Bạn không đủ quyền truy cập vào trang này <br>
				<a href="../index.php" style="font-size: 20px; text-align: center;">Quay trở lại trang chủ</a></p>';
		}
	}
	else{
		header('Location:loginAgain.php');
	}
}
mysqli_close($conn);
?>