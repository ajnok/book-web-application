$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "รูปแบบอีเมลไม่ถูกต้อง";
}
