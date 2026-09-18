/* อ้างถึงการสร้างออบเจกต์ product ในตัวอย่างที่ 14
และการเปลี่ยนค่าคุณสมบัติในตัวอย่างที่ 16 ที่เปลี่ยนค่าของคุณสมบัติ name เป็น ข้อความคำว่า
เครื่องปรับอากาศ */
// รูปแบบที่ 1 Dot Notation
product.showInfo = function( ) {
	alert("ผลิตภัณฑ์ใหม่: " + this.name);
};
// รูปแบบที่ 2 Bracket Notation
product["calculateDiscount"] = function(voucher, percent) {
	return (this.price * (1 - percent/100)) - voucher;
}
