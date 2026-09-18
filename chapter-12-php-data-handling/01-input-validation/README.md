# 1. การรับค่าจากฟอร์ม

อ้างอิงจากหนังสือ หน้า 424-432

| ตัวอย่างที่ (หนังสือ) | หน้า | คำอธิบาย | ไฟล์ |
|---|---|---|---|
| 1 | 424-425 | การรับข้อมูลด้วยตัวแปร $_GET (HTML + search.php) | example-01-get.html, search.php |
| 2 | 425-426 | การรับข้อมูลด้วยตัวแปร $_POST (HTML + login.php) | example-02-post.html, login.php |
| 3 | 427 | ฟังก์ชัน empty() | example-03-empty.php |
| 4 | 428 | ฟังก์ชัน isset() | example-04-isset.php |
| 5 | 428 | ฟังก์ชัน strlen() | example-05-strlen.php |
| 6 | 429 | ฟังก์ชัน filter_var() ร่วมกับ FILTER_VALIDATE_EMAIL | example-06-filter-var-validate.php |
| 7 | 430 | ฟังก์ชัน trim() | example-07-trim.php |
| 8 | 430 | ฟังก์ชัน stripslashes() | example-08-stripslashes.php |
| 9 | 431 | ฟังก์ชัน htmlspecialchars() | example-09-htmlspecialchars.php |
| 10 | 432 | ฟังก์ชัน filter_var() ร่วมกับกลุ่มตัวกรอง FILTER_SANITIZE_* | example-10-filter-var-sanitize.php |

หมายเหตุ (คงตามต้นฉบับหนังสือโดยไม่แก้ไข):
- ตัวอย่างที่ 6: บรรทัดที่ 2 พิมพ์เป็น `if (Ifilter_var($email, FILTER_VALIDATE_EMAIL)) {` โดยมีอักขระ "I" นำหน้าคำว่า filter_var แทนที่จะเป็นเครื่องหมาย `!` (ตามที่คำอธิบายเนื้อหาในหนังสือสื่อว่าเป็นการตรวจสอบค่าที่ *ไม่* ผ่านรูปแบบอีเมล) ตามที่ปรากฏในต้นฉบับหนังสือ (หน้า 429) จึงคงไว้ตามเดิมโดยไม่แก้ไข
- ตัวอย่างที่ 10: บรรทัดที่ 1 และ 3 กำหนดค่าตัวแปร `$email = "web<script>@example.com";` ซ้ำกันสองครั้ง และบรรทัดที่ 6 อ้างอิงตัวแปร `$comment` ซึ่งไม่ได้ถูกประกาศไว้ในโค้ดตัวอย่างนี้ (เป็นตัวแปรที่ปรากฏในตัวอย่างที่ 9 ก่อนหน้า) ตามที่ปรากฏในต้นฉบับหนังสือ (หน้า 432) จึงคงไว้ตามเดิมโดยไม่แก้ไข
