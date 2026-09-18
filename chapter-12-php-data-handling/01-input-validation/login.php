<?php
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo "ชื่อผู้ใช้: " . $username . "<br>";
		echo "รหัสผ่าน: " . str_repeat('*', strlen($password));
	} else {
		echo "กรุณากรอกข้อมูลให้ครบถ้วน";
	}
?>
