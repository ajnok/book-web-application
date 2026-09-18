<?php
if (isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	echo "ผลการค้นหาสำหรับ: " . $keyword;
} else {
	echo "กรุณาระบุคำค้นหา";
}
?>
