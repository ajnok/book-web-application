<?php
	function calculateAge($birthYear) {
		$currentYear = 2568;
		$age = $currentYear - $birthYear;
		return $age;
	}
	// เรียกใช้ฟังก์ชันและเก็บผลลัพธ์ไว้ในตัวแปร
	$myAge = calculateAge(2538);
	echo "อายุของ Nok คือ: " . $myAge . " ปี";
?>
