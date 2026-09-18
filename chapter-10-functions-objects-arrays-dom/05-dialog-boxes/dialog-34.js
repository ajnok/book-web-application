function deleteData() {
	var deleteConfirm = confirm("คุณต้องการลบข้อมูลนี้ใช่หรือไม่?");
	if (deleteConfirm) {
		console.log("ดำเนินการลบข้อมูลเรียบร้อย");
	} else {
	console.log("ยกเลิกการลบข้อมูล");
	}
}
function logout() {
	var logoutConfirm = confirm("คุณต้องการออกจากระบบใช่หรือไม่?");
	if (logoutConfirm) {
		console.log("ออกจากระบบเรียบร้อย");
	}
}
