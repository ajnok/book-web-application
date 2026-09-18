let language = ["HTML", "CSS", "JavaScript"];
console.log("อาร์เรย์:", language);
console.log("จำนวนข้อมูล:", language.length);
// การตรวจสอบอาร์เรย์ว่างเปล่า
let empty = [ ];
console.log("อาร์เรย์ว่าง:", empty);
console.log("จำนวนข้อมูลในอาร์เรย์ว่าง:", empty.length);
// การใช้ในเงื่อนไข
if (language.length > 0) {
	console.log("อาร์เรย์มีข้อมูล", language.length, "รายการ");
} else {
	console.log("อาร์เรย์ว่างเปล่า");
}
// การใช้ใน for loop
console.log("แสดงข้อมูลทั้งหมด:");
for (let i = 0; i < language.length; i++) {
	console.log("ตำแหน่งที่", i, ":", language[i]);
}
