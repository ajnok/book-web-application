<?php
	$title = "ตัวอย่างที่ 3";
	$name = "Nok";
	$department_th = "เทคโนโลยีธุรกิจดิจิทัล";
	$department_en = "Digital Business Technology";
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?phpecho $title;  ?>
	</title>
</head>
<body>
	<h1>
		สวัสดีคุณ:
		<span  style="color:blue;">
		<?php  echo $name;  ?>
		</span>
	</h1>
	<h2>
		ยินดีต้อนรับเข้าสู่โปรแกรมวิชา :
		<span style="color: blue;"
		onclick="alert('<?php  echo $department_en; ?>');">
		<?php  echo $department_th;    ?>
		</span>
	</h2>
</body>
</html>
