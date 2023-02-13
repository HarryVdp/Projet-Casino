let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(10 * Math.random() * 1000);
//let timeout;


//let number = 90;
var angle = 0;
container.style.transform = "rotate(" + -11.5 + "deg)";
number = number - 11.5;
//number = 360 - 11.5;
btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	//function myFunction() {
	//timeout = setTimeout(alertFunc, 3000);
	//}
	//number += Math.ceil(Math.random() * 1000);
	console.log(number);
	angle = number % 360 + 11.5;
	console.log(angle);

	if (angle > 0 && angle < 48) {
		//function alertFunc() {
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 100 crédits',
		})
		//}
	}
	if (angle > 49 && angle < 76) {
		//function alertFunc() {
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 200 crédits'
		})
		//}
	}
	if (angle > 77 && angle < 127) {
		//function alertFunc() {
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 100 crédits',
		})
		//}

	}
	if (angle > 128 && angle < 196) {
		//function alertFunc() {
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 65 crédits',
		})
		//}
	}
	if (angle > 197 && angle < 207) {
		//function alertFunc() {
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 800 crédits',
		})
		//}
	}
	if (angle > 208 && angle < 268) {
		//function alertFunc() {
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 75 crédits',
		})
		//}
	}
	if (angle > 269 && angle < 283) {
		//function alertFunc() {
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 400 crédits'
		})
		//}
	}
	if (angle > 284 && angle < 359) {
		//function alertFunc() {
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 50 crédits',
		})
		//}
	}
}


