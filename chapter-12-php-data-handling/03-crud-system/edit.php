<?php
require_once 'config.php';
// ตรวจสอบว่ามี ID ส่งมาหรือไม่
if (!isset($_GET['id']) || !lis_numeric($_GET['id'])) {
	header("Location: index.php");
	exit();
}
$id = (int)$_GET['id'];
try {
	// ดึงข้อมูลผู้ใช้ที่ต้องการแก้ไข
	$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
	$stmt->execute([':id' => $id]);
	$user = $stmt->fetch();
	if (!$user) {
		echo "<script>alert('ไม่พบข้อมูลผู้ใช้'); " ,
				"window.location.href='index.php';</script>";
		exit();
	}
} catch (PDOException $e) {
	echo "<script>alert('เกิดข้อผิดพลาด: " . $e->getMessage() . "');" ,
				"window.location.href='index.php';</script>";
	exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>แก้ไขข้อมูลผู้ใช้</title>
	<style>
		.form-group {
			margin: 15px 0;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
		input,
		textarea {
			width: 300px;
			padding: 8px;
		}
		.btn {
			padding: 10px 20px;
			margin: 5px;
			text-decoration: none;
		}
		.btn-save {
			background-color: #4CAF50;
			color: white;
			border: none;
		}
		.btn-cancel {
			background-color: gray;
			color: white;
		}
	</style>
</head>
<body>
	<h1>แก้ไขข้อมูลผู้ใช้</h1>
	<form action="edit_process.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
		<div class="form-group">
			<label for="name">ชื่อ:</label>
			<input type="text" id="name" name="name" value="<?php echo
				htmlspecialchars($user['name']); ?>" required>
		</div>
		<div class="form-group">
			<label for="email">อีเมล:</label>
			<input type="email" id="email" name="email" value="<?php echo
				htmlspecialchars($user['email']); ?>" required>
		</div>
		<div class="form-group">
			<label for="age">อายุ:</label>
			<input type="number" id="age" name="age" value="<?php echo
				htmlspecialchars($user['age']); ?>" min="1" max="120">
		</div>
		<button type="submit" class="btn btn-save">บันทึกการแก้ไข</button>
		<a href="index.php" class="btn btn-cancel">ยกเลิก</a>
	</form>
</body>
</html>
