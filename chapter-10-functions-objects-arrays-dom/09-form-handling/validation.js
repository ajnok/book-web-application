function validateForm() {
	let isValid = true;
	// ตรวจสอบชื่อ
	let name = document.getElementById('fullname').value.trim();
	let nameError = document.getElementById('name-error');
	if (name === '') {
		nameError.textContent = 'กรุณากรอกชื่อ-สกุล';
		isValid = false;
	} else {
		nameError.textContent = '';
	}
	// ตรวจสอบอีเมล
	let email = document.getElementById('email').value.trim();
	let emailError = document.getElementById('email-error');
	if (email === '') {
		emailError.textContent = 'กรุณากรอกอีเมล';
		isValid = false;
	} else if (email.indexOf('@') === -1) {
		emailError.textContent = 'อีเมลต้องมีเครื่องหมาย @';
		isValid = false;
	} else {
		emailError.textContent = '';
	}
	// แสดงผล
	let result = document.getElementById('result');
	if (isValid) {
		result.innerHTML = '<span style="color: green;">ข้อมูลถูกต้อง</span>';
	} else {
		result.innerHTML = '<span style="color: red;">กรุณาแก้ไขข้อมูล</span>';
	}
}
