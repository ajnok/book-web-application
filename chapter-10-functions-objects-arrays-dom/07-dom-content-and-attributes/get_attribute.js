function showImageInfo() {
	var image = document.getElementById("product");
	var info = "ข้อมูลภาพสินค้า:\n";
	info += "ไฟล์: " + image.getAttribute("src") + "\n";
	info += "คำอธิบาย: " + image.getAttribute("alt") + "\n";
	info += "ความกว้าง: " + image.getAttribute("width") + " พิกเซล";
	alert(info);
}
