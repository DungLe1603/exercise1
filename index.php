<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise 1</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="cake-section">
		<h2><strong>Bài 3: Ajax, PHP & MySQL - Ví dụ</strong></h2>
		<form>
			<p>Chọn hộp bánh trung thu:</p>
			<?php
				include('cake_list.php');
			?>
		</form>
		<br>
		<div id="cake-detail">
			<p class="alert">Thông tin về hộp bánh sẽ được hiển thị ở đây</p>
		</div>
	</div>
	<script>
		function showDetail(data) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("cake-detail").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET", "cake_detail.php?id="+data, true);
			xmlhttp.send();
		}
	</script>
</body>
</html>
