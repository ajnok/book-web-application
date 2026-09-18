function showData() {
	let name = document.getElementById('username').value;
	let status = document.getElementById('status').value;
	let news = document.getElementById('newsletter').checked;
	document.getElementById('result').innerHTML =
		`ชื่อ: ${name}, สถานะ: ${status}, รับข่าว: ${news}`;
}
