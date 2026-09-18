if (price > 5000) {
        discount = 0.05;
        message = "คุณได้รับส่วนลด 5%";
}
function  showResult() {
        console.log(price);
        document.getElementById("result").innerHTML = price;
}
