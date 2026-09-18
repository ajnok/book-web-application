const person = new Object();
person.name = "Nok";
person.age = 30;
person.greet = function () {
	console.log("สวัสดี ฉันชื่อ " + this.name);
};
