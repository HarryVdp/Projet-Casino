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

	if (angle >= 0 && angle < 48) {
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 125 crédits',
		})
		},5000)
	}
	if (angle >= 48 && angle < 76) {
		setTimeout(function(){
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 250 crédits'
		})
		},5000)
	}
	if (angle >= 76 && angle < 127) {
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 125 crédits',
		})
		},5000)

	}
	if (angle >= 127 && angle < 196) {
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 85 crédits',
		})
		},5000)
	}
	if (angle >= 196 && angle < 207) {
		setTimeout(function(){
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 1200 crédits',
		})
		},5000)
	}
	if (angle >= 208 && angle < 268) {
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 100 crédits',
		})
		},5000)
	}
	if (angle >= 268 && angle < 283) {
		setTimeout(function(){
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 800 crédits'
		})
		},5000)
	}
	if (angle >= 283 && angle < 359) {
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 75 crédits',
		})
		},5000)
	}
}


