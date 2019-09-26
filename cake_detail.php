<?php
	require_once('dbConnect.php');
	$id = $_REQUEST["id"];
	if ($id != '') {
		$sql = "SELECT * FROM moon_cake where id = " . $id;
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
			echo "<p>Tên bánh: <strong>" . $row['name'] . "</strong></p>";
			echo "<p>Giá bán: <strong>" . number_format($row['price']) . "</strong> vnđ</p>";
			echo "<img src='images/" . $row['image'] . "' alt='Cake image'>";
		}
		$conn->close();
	} else {
		echo "<p class='alert'>Thông tin về hộp bánh sẽ được hiển thị ở đây</p>";
	}
?>
