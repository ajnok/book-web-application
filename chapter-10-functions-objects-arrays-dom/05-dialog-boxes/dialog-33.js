function greeting() {
	let name = prompt('กรุณากรอกชื่อของคุณ:', '');
	console.log('ชื่อของคุณคือ: ' + name);
}
function birthYear() {
	let year = prompt('กรอกอายุของคุณ:', 'ระบุตัวเลข');
	year = 2568-parseInt(year);
	console.log('ปีพ.ศ.เกิดของคุณคือ: ' + year);
}
