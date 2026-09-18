$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([
	':name' => 'Ann',
	':email' => 'ann@example.com'
]);
if ($result) {
	echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
} else {
	echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล";
}
