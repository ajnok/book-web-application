try {
	$pdo = new PDO("mysql:host=localhost;dbname=web_app_db;charset=utf8",
			"root", "rootpass");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด: " . $e->getMessage();
}
