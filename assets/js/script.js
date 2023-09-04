const duration = document.getElementById("durationInput");
const price = document.getElementById("detail-price");
const totalPrice = document.getElementById("total-price");

function durationFunc() {
	totalPrice.value = duration.value * price.innerText;
}
