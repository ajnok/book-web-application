let language = ["HTML", "CSS", "JavaScript"];
console.log("ก่อนเพิ่ม:", language);
// เพิ่มรายการเดียวที่ต้นอาร์เรย์
let newLength1 = language.unshift("XML");
console.log("หลังเพิ่ม XML:", language);
console.log("ความยาวใหม่:", newLength1);
// เพิ่มหลายรายการพร้อมกันที่ต้นอาร์เรย์
let newLength2 = language.unshift("JSON", "YAML", "TOML");
console.log("หลังเพิ่มหลายรายการ:", language);
console.log("ความยาวสุดท้าย:", newLength2);
