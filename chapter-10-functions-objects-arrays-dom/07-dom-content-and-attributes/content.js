function changeText() {
	var title = document.getElementById("title");
	var desc = document.getElementById("description");
	console.log(title.textContent); // แสดง: หัวเรื่องเดิม
	// เปลี่ยนเนื้อหา
	title.textContent = "หัวเรื่องใหม่";
	desc.textContent = "คำอธิบายที่ได้รับการอัปเดต";
}
