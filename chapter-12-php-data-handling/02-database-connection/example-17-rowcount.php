$sql = "DELETE FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([':email' => 'example@example.com']);
if ($stmt->rowCount() > 0) {
	echo "ลบข้อมูลผู้ใช้สำเร็จ";
} else {
	echo "ไม่พบข้อมูลที่ต้องการลบ";
}
