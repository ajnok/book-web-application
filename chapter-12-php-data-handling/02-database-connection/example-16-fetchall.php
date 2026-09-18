$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
	echo "ชื่อ: " . $user['name'] . "<br>";
	echo "อีเมล: " . $user['email'] . "<br>";
}
