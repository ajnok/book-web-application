$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => 1]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
	echo "ชื่อ: " . $user['name'] . "<br>";
	echo "อีเมล: " . $user['email'];
} else {
	echo "ไม่พบข้อมูลผู้ใช้";
}
