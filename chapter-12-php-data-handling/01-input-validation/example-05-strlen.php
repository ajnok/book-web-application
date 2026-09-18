$password = $_POST['password'];
if (strlen($password) < 6) {
	echo "รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร";
}
