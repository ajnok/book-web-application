const product = {
	name: "ตู้เย็น",
	price: 25000,
	showInfo: function() {
		console.log("สินค้า: " + this.name);
	},
	calculateDiscount: function(percent) {
		return this.price * (1 - percent/100);
	}
};
console.log(product.name);
product.showInfo();
let discountPrice = product.calculateDiscount(10);
