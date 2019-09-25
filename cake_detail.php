<?php
	$id = $_REQUEST["id"];
    if ($id != '') {
		include('dbConnect.php');
		$sql = "SELECT * FROM moon_cake where id = " . $id;
		$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				echo "<p>Tên bánh: <strong>" . $row['name'] . "</strong></p>";
				echo "<p>Giá bán: <strong>" . $row['price'] . "</strong> vnđ</p>";
				echo "<img src='images/" . $row['image'] . "' alt='Cake image'>";
			}
		$conn->close();
	} else {
        echo "Không tìm thấy thông tin";
    }
?>
