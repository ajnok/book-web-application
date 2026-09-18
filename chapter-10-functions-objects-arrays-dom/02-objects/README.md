# 2. ออบเจกต์

อ้างอิงจากหนังสือ หน้า 324-339

| ตัวอย่างที่ (หนังสือ) | หน้า | คำอธิบาย | ไฟล์ |
|---|---|---|---|
| 10 | 325 | การสร้างออบเจกต์แบบลิตเทอรัล (Object Literal) | example-10-object-literal.js |
| 11 | 326 | การสร้างออบเจกต์แบบลิตเทอรัลพร้อมเมธอด | example-11-object-literal-with-method.js |
| 12 | 327 | การสร้างออบเจกต์ด้วย new Object() | example-12-new-object.js |
| 13 | 329 | การสร้างออบเจกต์ด้วย Constructor Function | example-13-constructor-function.js |
| 14 | 330 | การเข้าถึงคุณสมบัติและเมธอดด้วย Dot Notation | example-14-dot-notation.js |
| 15 | 332 | การเข้าถึงคุณสมบัติและเมธอดด้วย Bracket Notation (5 รูปแบบ) | example-15-bracket-notation.js |
| 16 | 333-334 | การเปลี่ยนแปลงค่าของคุณสมบัติที่มีอยู่ในออบเจกต์ | example-16-changing-property-values.js |
| 17 | 334-335 | การเพิ่มคุณสมบัติใหม่ให้กับออบเจกต์ | example-17-adding-new-properties.js |
| 18 | 336 | การเปลี่ยนแปลงเมธอดของออบเจกต์ | example-18-changing-methods.js |
| 19 | 337 | การเพิ่มเมธอดให้กับออบเจกต์ | example-19-adding-new-methods.js |
| 20 | 338-339 | การลบคุณสมบัติหรือเมธอดออกจากออบเจกต์ด้วย delete | example-20-deleting-properties-and-methods.js |

หมายเหตุ (คงตามต้นฉบับหนังสือโดยไม่แก้ไข เว้นแต่จุดที่ระบุไว้ว่า "แก้ไขแล้ว"):
- ตัวอย่างที่ 13: มีการเว้นวรรคซ้ำ (double space) ในบรรทัด `function  Person(name, age) {` และ `const  staff1 = new Person("Nok", 30);` ตามที่ปรากฏในหนังสือ (หน้า 329)
- **ตัวอย่างที่ 15 (แก้ไขแล้ว)**: ต้นฉบับหนังสือ (หน้า 332) พิมพ์บรรทัดที่ 3 เป็น `console.log(product[propertyName` โดยไม่มีวงเล็บปิด `]` และ `)` รวมทั้งไม่มีเครื่องหมายอัฒภาค (;) ปิดท้าย ซึ่งทำให้เกิด JavaScript Syntax Error หากนำไปรันจริง ตามคำขอของผู้เขียนจึงแก้ไขไฟล์ `example-15-bracket-notation.js` ในบรรทัดดังกล่าวให้เป็น `console.log(product[propertyName]);` เพื่อให้โค้ดสามารถรันได้ถูกต้อง (เป็นข้อยกเว้นเดียวในหัวข้อนี้ที่มีการแก้ไขโค้ดจากต้นฉบับหนังสือ)
- ตัวอย่างที่ 15, 20: มีการเว้นวรรคซ้ำหลังคำสั่ง `let`/`delete` เช่น `let  propertyName`, `let  methodName`, `let  discount`, `delete  product.price`, `delete  product["showInfo"]` ตามต้นฉบับหนังสือ
