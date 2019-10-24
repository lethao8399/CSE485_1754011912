<?php 
	require_once("myConn.php");
	$sql = "SELECT * FROM users";
	mysqli_set_charset($conn,'UTF8');
	$result = mysqli_query($conn,$sql);
	//buoc 4: xu ly ket qua
	if(mysqli_num_rows($result)>0){
		echo 'Số người dùng hiện hành: '.mysqli_num_rows($result);
		echo '<table border="1">';
		echo '<tr>';
		echo '<th>UserID</th><th>UserName</th><th>Email</th><th>Delete</th>';
		echo '</tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>'.$row['id'].'</td>';
			echo '<td>'.$row['username'].'</td>';
			echo '<td>'.$row['email'].'</td>';
			echo '<td><a href="user.php?id_delete='.$row['id'].'">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
	}
?>
<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}	
?>