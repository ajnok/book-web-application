/* อ้างถึงการสร้างออบเจกต์ product ในตัวอย่างที่ 14 และการเปลี่ยนแปลงอื่นๆ ในตัวอย่างที่ 16-18
*/
// รูปแบบที่ 1 Dot Notation
product.getFullInfo = function() {
	return "สินค้า: " + this.name + " ยี่ห้อ: " + this.brand + " ปีที่ผลิต: " + this.year;
};
// รูปแบบที่ 2 Bracket Notation
product["checkStock"] = function(quantity) {
	if (quantity > 0) {
		return "มีสินค้าในสต็อก จำนวน " + quantity + " ชิ้น";
	} else {
		return "สินค้าหมด";
	}
};
