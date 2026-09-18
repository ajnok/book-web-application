<?php
	$day = "จันทร์";
	switch ($day) {
		case "จันทร์":
			echo "วันแรกของสัปดาห์";
			break;
		case "ศุกร์":
			echo "วันสุดท้ายของสัปดาห์ทำงาน";
			break;
		case "เสาร์":
			echo "วันแรกของวันหยุดสุดสัปดาห์";
			break;
		case "อาทิตย์":
			echo "วันที่สองของวันหยุดสุดสัปดาห์";
			break;
		default:
			echo "วันธรรมดา";
	}
?>
