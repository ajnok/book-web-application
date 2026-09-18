function processUserInput(callback) {
	const name = "Nok";
	callback(name);
}
processUserInput(function(name) {
	console.log("ยินดีต้อนรับ " + name);
});
