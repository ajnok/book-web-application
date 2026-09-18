<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>เพิ่มผู้ใช้ใหม่</title>
</head>
<body>
	<h1>เพิ่มผู้ใช้ใหม่</h1>
	<form action="add_process.php" method="POST">
		<p>
			<label for="name">ชื่อ:</label><br>
			<input type="text" id="name" name="name" required>
		</p>
		<p>
			<label for="email">อีเมล:</label><br>
			<input type="email" id="email" name="email" required>
		</p>
		<p>
			<label for="age">อายุ:</label><br>
			<input type="number" id="age" name="age" min="1" max="120">
		</p>
		<button type="submit">บันทึก</button>
		<a href="index.php">ยกเลิก</a>
	</form>
</body>
</html>
