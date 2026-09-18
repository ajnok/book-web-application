let language = ["HTML", "CSS", "JavaScript"];
console.log("ก่อนเพิ่ม:", language);
// เพิ่มรายการเดียว
let newLength1 = language.push("jQuery");
console.log("หลังเพิ่ม jQuery:", language);
console.log("ความยาวใหม่:", newLength1);
// เพิ่มหลายรายการพร้อมกัน
let newLength2 = language.push("React", "Vue", "Angular");
console.log("หลังเพิ่มหลายรายการ:", language);
console.log("ความยาวสุดท้าย:", newLength2);
