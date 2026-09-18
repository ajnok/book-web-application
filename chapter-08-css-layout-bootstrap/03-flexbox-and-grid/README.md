# 2. หลักการพื้นฐานของการจัดวางโครงร่างด้วย CSS Flexbox และ CSS Grid

อ้างอิงจากหนังสือ หน้า 238-249

| ตัวอย่างที่ (หนังสือ) | หน้า | คำอธิบาย | ไฟล์ |
|---|---|---|---|
| 10 | 239-240 | การกำหนด Flex Container ด้วย display: flex, flex-direction และ justify-content | example-10-flex-container.css, example-10-flex-container.html |
| 11 | 240 | การกำหนดพฤติกรรมของ Flex Items ด้วยคุณสมบัติ flex | example-11-flex-items.css, example-11-flex-items.html |
| 12 | 245 | การกำหนด Grid Container ด้วย display: grid, grid-template-columns, grid-template-rows และ gap | example-12-grid-container.css, example-12-grid-container.html |
| 13 | 246-247 | การกำหนดขนาด Grid Item ให้ครอบคลุมหลายคอลัมน์ด้วย grid-column: span | example-13-grid-items-span.css, example-13-grid-items-span.html |
| 14 | 247-248 | การกำหนดขนาดคอลัมน์แบบยืดหยุ่นด้วยหน่วย fr | example-14-grid-rows.css, example-14-grid-rows.html |
| 15 | 248-249 | การกำหนดคอลัมน์ของ Grid ด้วย grid-template-columns | example-15-grid-columns.css, example-15-grid-columns.html |

หมายเหตุ:

- ตัวอย่างที่ 13 ในหนังสือ (หน้า 246) ส่วน HTML มีการกำหนด `class="item1"` ให้กับทั้ง Item 1 และ Item 2 (บรรทัดที่ 2 และ 3) ทั้งที่เนื้อหาอธิบายถึงคลาส `item2` ด้วย ซึ่งสันนิษฐานว่าเป็นการพิมพ์คลาดเคลื่อนในหนังสือ แต่เนื่องจากต้องคงโค้ดไว้ตามต้นฉบับ จึงไม่มีการแก้ไข
- ตัวอย่างที่ 14 อยู่ในหัวข้อย่อย "การกำหนดแถว (Grid Rows)" แต่โค้ด CSS ที่ปรากฏในหนังสือ (หน้า 247) ใช้คุณสมบัติ grid-template-columns ไม่ใช่ grid-template-rows ซึ่งเป็นไปตามต้นฉบับในหนังสือ จึงคงไว้ตามเดิมโดยไม่แก้ไข
- ทุกตัวอย่างในหัวข้อนี้แสดงเป็นตารางสองคอลัมน์ (CSS และ HTML) จึงแยกบันทึกเป็น 2 ไฟล์ต่อหนึ่งตัวอย่าง
