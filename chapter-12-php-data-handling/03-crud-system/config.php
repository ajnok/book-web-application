<?php
// ข้อมูลการเชื่อมต่อฐานข้อมูล
$host = 'localhost';
$dbname = 'blog_system';
$username = 'root';
$password = '';
try {
	// สร้างการเชื่อมต่อ PDO
	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
		$username, $password);
	// กำหนดโหมดการแสดงข้อผิดพลาด
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// กำหนดโหมดการดึงข้อมูล
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	echo "การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $e->getMessage();
	exit();
}
?>
