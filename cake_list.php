<?php
include('dbConnect.php');
$sql = "SELECT * FROM moon_cake";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<select name='cake-data' onChange='showDetail(this.value)'>";
echo "<option value=''>Hãy chọn</option>";
while($row = $result->fetch_assoc()) {
echo "<option value=". $row["id"]. ">" . $row["name"]. "</option>";
}
echo "</select>";
} else {
echo "Không tìm thấy thông tin";
}
$conn->close();
?>
