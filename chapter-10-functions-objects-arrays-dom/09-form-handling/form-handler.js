// เพิ่ม event listener ให้กับฟอร์ม
document.getElementById('loginForm').addEventListener('submit', function (e) {
	e.preventDefault(); // ป้องกันการส่งฟอร์มโดยอัตโนมัติ
	let username = document.getElementById('username').value.trim();
	let password = document.getElementById('password').value;
	let isValid = true;
	// ตรวจสอบชื่อผู้ใช้
	if (username.length < 3) {
		userError = document.getElementById('username-error')
		userError.textContent = 'ชื่อผู้ใช้ต้องมีอย่างน้อย 3 ตัวอักษร';
		isValid = false;
	} else {
		document.getElementById('username-error').textContent = '';
	}
	// ตรวจสอบรหัสผ่าน
	if (password.length < 6) {
		passwordError = document.getElementById('password-error');
		passwordError.textContent = 'รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร';
		isValid = false;
	} else {
		document.getElementById('password-error').textContent = '';
	}
	// แสดงผลการตรวจสอบ
	if (isValid) {
		result=document.getElementById('result');
		result.innerHTML = '<span style="color: green;">เข้าสู่ระบบสำเร็จ</span>';
	}
});
// ตรวจสอบแบบเรียลไทม์
document.getElementById('username').addEventListener('input', function () {
	if (this.value.length >= 3) {
		document.getElementById('username-error').textContent = '';
	}
});
