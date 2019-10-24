<?php 
session_start();
if (!isset($_SESSION['email'])) {
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page Admin</title>
</head>
<body style="background-image: url(images/login.jpg); background-size: cover">
	<h1 align="center" style="margin-top: 15%; font-size: 50px;">CHÀO MỪNG ĐĂNG NHẬP</h1> <br>
	<h2 align="center"><a href="addNews.php">Thêm bài viết mới</a></h2>
	<h2 align="center"><a href="user.php">Quản lý user</a></h2>
	<h3 align="center"><a href="logout.php">Log out</a></h3>
</body>
</html>