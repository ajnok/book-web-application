<?php
require_once 'config.php';
// ตรวจสอบว่ามี ID ส่งมาหรือไม่
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
	echo "<script>alert('ไม่พบข้อมูลที่ต้องการลบ'); " ,
			"window.location.href='index.php';</script>";
	exit();
}
$id = (int)$_GET['id'];
try {
	// ตรวจสอบว่ามีข้อมูลผู้ใช้นี้อยู่จริงหรือไม่
	$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE id = :id");
	$stmt->execute([':id' => $id]);
	if ($stmt->fetchColumn() == 0) {
		echo "<script>alert('ไม่พบข้อมูลผู้ใช้ที่ต้องการลบ'); " ,
				"window.location.href='index.php';</script>";
		exit();
	}
	// ลบข้อมูลผู้ใช้
	$stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
	$result = $stmt->execute([':id' => $id]);
	if ($result && $stmt->rowCount() > 0) {
		echo "<script>alert('ลบข้อมูลสำเร็จ'); " ,
				"window.location.href='index.php';</script>";
	} else {
		echo "<script>alert('เกิดข้อผิดพลาดในการลบข้อมูล'); " ,
				"window.location.href='index.php';</script>";
	}
} catch (PDOException $e) {
	echo "<script>alert('เกิดข้อผิดพลาด: " . $e->getMessage() . "'); " ,
			"window.location.href='index.php';</script>";
}
