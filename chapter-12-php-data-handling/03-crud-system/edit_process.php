<?php
require_once 'config.php';
if ($_POST) {
	// รับและตรวจสอบข้อมูลจากฟอร์ม
	$id = (int)$_POST['id'];
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$age = !empty($_POST['age']) ? (int)$_POST['age'] : null;
	// ตรวจสอบข้อมูลพื้นฐาน
	if (empty($name) || empty($email) || $id <= 0) {
		echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน'); history.back();</script>";
		exit();
	}
	// ตรวจสอบรูปแบบอีเมล
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<script>alert('รูปแบบอีเมลไม่ถูกต้อง'); history.back();</script>";
		exit();
	}
	try {
		// ตรวจสอบว่าอีเมลซ้ำกับคนอื่นหรือไม่
		$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email AND id != :id");
		$stmt->execute([':email' => $email, ':id' => $id]);
		if ($stmt->fetchColumn() > 0) {
			echo "<script>alert('อีเมลนี้มีคนอื่นใช้แล้ว'); history.back();</script>";
			exit();
		}
		// อัปเดตข้อมูล
		$stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email, age = :age WHERE id = :id");
		$result = $stmt->execute([
			':name' => $name,
			':email' => $email,
			':age' => $age,
			':id' => $id
		]);
		if ($result && $stmt->rowCount() > 0) {
			echo "<script>alert('แก้ไขข้อมูลสำเร็จ'); " ,
				"window.location.href='index.php';</script>";
		} else {
			echo "<script>alert('ไม่มีการเปลี่ยนแปลงข้อมูล'); " ,
				"window.location.href='index.php';</script>";
		}
	} catch (PDOException $e) {
		echo "<script>alert('เกิดข้อผิดพลาด: " . $e->getMessage() . "');",
				"history.back();</script>";
	}
} else {
	header("Location: index.php");
	exit();
}
