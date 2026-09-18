function changeHTML() {
	var content = document.getElementById("content");
	// แสดงเนื้อหา HTML ปัจจุบัน
	console.log(content.innerHTML); // แสดง: เนื้อหาเดิม
	// เปลี่ยนเนื้อหาเป็น HTML
	content.innerHTML = "<strong>เนื้อหาใหม่</strong> พร้อม <em>การจัดรูปแบบ</em>";
}
