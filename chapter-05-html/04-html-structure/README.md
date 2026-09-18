# 4. โครงสร้างของภาษา HTML

อ้างอิงจากหนังสือ หน้า 131-144

| ตัวอย่างที่ (หนังสือ) | หน้า | คำอธิบาย | ไฟล์ |
|---|---|---|---|
| 11 | 135 | การกำหนดชุดรหัสอักขระเป็น UTF-8 | example-11-meta-charset-utf8.html |
| 12 | 135 | การกำหนดชุดรหัสอักขระเป็น ISO-8859 | example-12-meta-charset-iso8859.html |
| 13 | 137 | การตั้งค่าหน้าต่างมุมมองให้มีความกว้างเท่ากับอุปกรณ์ | example-13-viewport-device-width.html |
| 14 | 137 | การกำหนดความกว้างของหน้าต่างมุมมองแบบคงที่ | example-14-viewport-fixed-width.html |
| 15 | 139 | การกำหนดข้อมูลสนับสนุนเครื่องมือค้นหา (application-name, author, description, keywords) | example-15-meta-search-engine.html |
| 16 | 139 | การกำหนดชื่อเรื่องของเว็บด้วยแท็ก title | example-16-title-basic.html |
| 17 | 140 | การกำหนดชื่อเรื่องของเว็บแบบระบุบริบทของหน้า | example-17-title-descriptive.html |
| 18 | 140 | การเชื่อมโยงไฟล์ CSS ที่อยู่โฟลเดอร์เดียวกัน | example-18-link-css-same-folder.html |
| 19 | 140 | การเชื่อมโยงไฟล์ CSS ที่จัดเก็บในโฟลเดอร์ css | example-19-link-css-subfolder.html |
| 20 | 141 | การเชื่อมโยงไฟล์ CSS จาก CDN (Bootstrap) | example-20-link-css-cdn.html |
| 21 | 142 | การเชื่อมโยงไฟล์ JavaScript ที่อยู่โฟลเดอร์เดียวกัน | example-21-script-same-folder.html |
| 22 | 142 | การเชื่อมโยงไฟล์ JavaScript ที่จัดเก็บในโฟลเดอร์ js | example-22-script-subfolder.html |
| 23 | 142 | การเชื่อมโยงไฟล์ JavaScript จาก CDN (Bootstrap) | example-23-script-cdn.html |
| 24 | 143 | ภาพรวมส่วนหัว (head) ของเอกสารเว็บ รวมทุกองค์ประกอบที่กล่าวถึงในหัวข้อนี้ | example-24-head-full.html |
| 25 | 143-144 | โครงสร้างเอกสาร HTML ฉบับสมบูรณ์ พร้อม DOM Tree และผลลัพธ์การแสดงผล | example-25-full-document.html |

หมายเหตุ:

- ตัวอย่างที่ 24 มีบรรทัด `<meta name="description". content="...">` ที่มีจุด (.) ปรากฏอยู่ระหว่างคำว่า `"description"` กับ `content` ซึ่งเป็นไปตามต้นฉบับในหนังสือ (หน้า 143) จึงคงไว้ตามเดิมโดยไม่แก้ไข
- ตัวอย่างที่ 25 ส่วน `<head>...</head>` ในหนังสือเขียนย่อด้วย `...` เพื่ออ้างอิงกลับไปยังเนื้อหา `<head>` เดียวกับตัวอย่างที่ 24 จึงคงไว้ตามเดิมโดยไม่ขยายเนื้อหาแทน
