$input = "ชื่อของฉันคือ \"Nok\" และอายุ 25 ปี";
$clean = stripslashes($input);
echo "ก่อนล้าง: " . $input . "<br>";
echo "หลังล้าง: " . $clean;
