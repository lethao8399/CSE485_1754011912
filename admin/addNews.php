<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New</title>
</head>
<body style="text-align: center;">
	<form action="addNews.php" method="post">
		<div>
			<label><h4>Tiêu đề</h4></label>
			<input style="width: 80%" type="text" name="txtTitle" class="form-control" placeholder="Nhập tiêu đề">
		</div>
		<div class="form-group">
			<label><h4>Nội dung</h4></label>
			<textarea style="width: 80%" type="text" name="txtDesc" class="form-control" rows="9" placeholder="Nhập nội dung"></textarea>
		</div>
		<div>
			<button type="submit" name="btn_add" class="btn btn-primary">Hoàn tất</button>
		</div>
	</form>
</body>
</html>

<?php 
	require_once("myConn.php");
	if (isset($_POST["btn_add"])) {
		$title = $_POST['txtTitle'];
		$desc = $_POST['txtDesc'];
		if ($title == "" || $desc == "") {
			echo '<p style="color: red">Phải nhập đủ thông tin</p>';
		} else {
			$sql = "INSERT INTO news(newsTitle,newsDesc,postdate)
					VALUES ('$title','$desc',now())";
			mysqli_query($conn,$sql);
			echo '<p align="center" style="color: blue; font-size: 30px; margin-top: 10%">Thêm thành công bài viết<br>
				<a href="admin.php" style="margin-top: 7%;font-size: 15px; text-align: center;">Quay lại Admin</a></p>';
		}
	}
?>

