let language = ["HTML", "CSS", "JavaScript"];
console.log("ก่อนลบ:", language);
// ลบข้อมูลท้ายอาร์เรย์
let removedItem = language.pop();
console.log("ข้อมูลที่ถูกลบ:", removedItem);
console.log("หลังลบ:", language);
console.log("ความยาวใหม่:", language.length);
// ลบต่อเนื่องหลายครั้ง
let removed1 = language.pop();
let removed2 = language.pop();
console.log("ลบครั้งที่ 2:", removed1);
console.log("ลบครั้งที่ 3:", removed2);
console.log("อาร์เรย์ที่เหลือ:", language);
