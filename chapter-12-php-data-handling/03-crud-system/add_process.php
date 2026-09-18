<?php
require_once 'config.php';
if ($_POST) {
	// รับและตรวจสอบข้อมูลจากฟอร์ม
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	if (!empty($_POST['age'])) {
		$age = (int)$_POST['age'];
	} else {
		$age = null;
	}
	// ตรวจสอบข้อมูลพื้นฐาน
	if (empty($name) || empty($email)) {
		echo "<script>alert('กรุณากรอกชื่อและอีเมล'); history.back();</script>";
		exit();
	}
	// ตรวจสอบรูปแบบอีเมล
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<script>alert('รูปแบบอีเมลไม่ถูกต้อง'); history.back();</script>";
		exit();
	}
	try {
		// ตรวจสอบว่าอีเมลซ้ำหรือไม่
		$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
		$stmt->execute([':email' => $email]);
		if ($stmt->fetchColumn() > 0) {
			echo "<script>alert('อีเมลนี้มีอยู่ในระบบแล้ว'); history.back();</script>";
			exit();
		}
		// เพิ่มข้อมูลใหม่
		$stmt = $pdo->prepare("INSERT INTO users (name, email, age) VALUES (:name, :email, :age)");
		$result = $stmt->execute([
			':name' => $name,
			':email' => $email,
			':age' => $age
		]);
		if ($result) {
			echo "<script>alert('เพิ่มข้อมูลสำเร็จ'); " ,
				"window.location.href='index.php';</script>";
		} else {
			echo "<script>alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูล');" ,
				"history.back();</script>";
		}
	} catch (PDOException $e) {
		echo "<script>alert('เกิดข้อผิดพลาด: " . $e->getMessage() . "');",
				"history.back();</script>";
	}
} else {
	// กรณีที่ไม่ได้ส่งข้อมูลมา
	header("Location: add.php");
	exit();
}
