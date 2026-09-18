<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ระบบจัดการผู้ใช้</title>
	<style>
		table { border-collapse: collapse; width: 100%; }
		th,td { border: 1px solid #ddd;		padding: 8px; text-align: left; }
		th { background-color: #f2f2f2; }
		.btn { padding: 5px 10px; text-decoration: none; margin: 2px; }
		.btn-add { background-color: #4CAF50; color: white; }
		.btn-edit { background-color: #2196F3; color: white; }
		.btn-delete { background-color: #f44336; color: white; }
	</style>
</head>
<body>
	<h1>ระบบจัดการผู้ใช้</h1>
	<a href="add.php" class="btn btn-add">เพิ่มผู้ใช้ใหม่</a>
	<h2>รายการผู้ใช้</h2>
	<?php
	try {
		// ดึงข้อมูลผู้ใช้ทั้งหมด
		$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
		$users = $stmt->fetchAll();
		if (count($users) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>ชื่อ</th><th>อีเมล</th><th>อายุ</th><th>วันที่สร้าง</th><th>การจัดการ</th></tr>";
			foreach ($users as $user) {
				echo "<tr>";
				echo "<td>" . $user['id'] . "</td>";
				echo "<td>" . $user['name'] . "</td>";
				echo "<td>" . $user['email'] . "</td>";
				echo "<td>" . $user['age'] . "</td>";
				echo "<td>" . $user['created_at'] . "</td>";
				echo "<td>";
				echo "<a href='edit.php?id=" . $user['id'] . "' class='btn btn-edit'>แก้ไข</a>";
				echo "<a href='delete_process.php?id=" . $user['id'] . "' class='btn btn-delete' onclick='return confirm(\"คุณต้องการลบข้อมูลนี้หรือไม่?\")'>ลบ</a>";
				echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "<p>ไม่มีข้อมูลผู้ใช้ในระบบ</p>";
		}
	} catch (PDOException $e) {
		echo "<p>เกิดข้อผิดพลาด: " . $e->getMessage() . "</p>";
	}
	?>
</body>
</html>
