let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(10 * Math.random() * 1000);
//let number = 90;
var angle = 0;
container.style.transform = "rotate(" + -11.5 + "deg)";
number = number - 11.5;
//number = 360 - 11.5;
btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	//number += Math.ceil(Math.random() * 1000);
	console.log(number);
	angle = number % 360 + 11.5;
	console.log(angle);
	if (angle > 0 && angle < 48) {
		console.log("Dommage vous avez gagné 100 crédit")
	}
	if (angle > 49 && angle < 76) {
		console.log("Bravo vous avez gagné 200 crédit")
	}
	if (angle > 77 && angle < 127) {
		console.log("Dommage vous avez gagné 100 crédit")
	}
	if (angle > 128 && angle < 196) {
		console.log("Dommage vous avez gagné 65 crédit")
	}
	if (angle > 197 && angle < 207) {
		console.log("Bravo vous avez gagné 800 crédit")
	}
	if (angle > 208 && angle < 268) {
		console.log("Dommage vous avez gagné 75 crédit")
	}
	if (angle > 269 && angle < 283) {
		console.log("Bravo vous avez gagné 400 crédit")
	}
	if (angle > 284 && angle < 359) {
		console.log("Dommage vous avez gagné 50 crédit")
	}
}