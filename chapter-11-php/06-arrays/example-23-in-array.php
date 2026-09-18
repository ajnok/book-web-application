<?php
	$allowed = ["Web App", "Digital Business", "Multimedia"];
	$input = "Web App";
	if (in_array($input, $allowed)) {
		echo "หมวดหมู่ที่เลือกได้รับอนุญาต";
	}
?>
