function  Person(name, age) {
	this.firstname = name;
	this.age = age;
	this.greet = function() {
		console.log("สวัสดี ฉันชื่อ " + this.firstname);
	}
}
const  staff1 = new Person("Nok", 30);
staff1.greet();
