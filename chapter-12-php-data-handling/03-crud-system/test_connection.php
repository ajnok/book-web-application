<?php
require_once 'config.php';
echo "<h2>ทดสอบการเชื่อมต่อฐานข้อมูล</h2>";
try {
	// ทดสอบการเรียกดูข้อมูลจากตาราง users
	$stmt = $pdo->query("SELECT COUNT(*) as total FROM users");
	$result = $stmt->fetch();
	echo "<p>เชื่อมต่อฐานข้อมูลสำเร็จ</p>";
	echo "<p>จำนวนผู้ใช้ในระบบ: " . $result['total'] . " คน</p>";
} catch (PDOException $e) {
	echo "<p>เกิดข้อผิดพลาด: " . $e->getMessage() . "</p>";
}
