let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(10 * Math.random() * 1000);

let loose = new Audio("loose.mp3");


let win = new Audio("win.mp3");





var angle = 0;
container.style.transform = "rotate(" + -11.5 + "deg)";
number = number - 11.5;
btn.onclick = function () {
	if(money >= 150){
		money -= 150;
	container.style.transform = "rotate(" + number + "deg)";
	console.log(number);
	angle = number % 360 + 11.5;
	console.log(angle);

	if (angle >= 0 && angle < 48) {
		money += 125;
		setTimeout(function(){
			loose.play();
		Swal.fire({
			icon: 'error',
			title: 'Perdu ! -25',
			text: 'Mise : 150 Valeur de la roue : 125',
		})
		},5000)
	}
	if (angle >= 48 && angle < 76) {
		money += 250;
		setTimeout(function(){
			win.play();
		Swal.fire({
			icon: 'success',
			title: 'Bravo ! + 100 ',
			text: 'Mise : 150 Valeur de la roue : 250'
		})
		},5000)
	}
	if (angle >= 76 && angle < 127) {
		money += 125;
		setTimeout(function(){
			loose.play();
		Swal.fire({
			icon: 'error',
			title: 'Perdu ! -25',
			text: 'Mise : 150 Valeur de la roue : 125',
		})
		},5000)

	}
	if (angle >= 127 && angle < 196) {
		money += 85;
		setTimeout(function(){
			loose.play();
		Swal.fire({
			icon: 'error',
			title: 'Perdu ! - 65',
			text: 'Mise : 150 Valeur de la roue : 85',
		})
		},5000)
	}
	if (angle >= 196 && angle < 207) {
		money += 1200;
		setTimeout(function(){
			win.play();
		Swal.fire({
			icon: 'success',
			title: 'Bravo ! + 1050 ',
			text: 'Mise : 150 Valeur de la roue : 1200',
		})
		},5000)
	}
	if (angle >= 208 && angle < 268) {
		money += 100;
		setTimeout(function(){
			loose.play();
		Swal.fire({
			icon: 'error',
			title: 'Dommage ! -50',
			text: 'Mise : 150 Valeur de la roue : 100',
		})
		},5000)
	}
	if (angle >= 268 && angle < 283) {
		money += 800;
		setTimeout(function(){
		Swal.fire({
			icon: 'success',
			title: 'Bravo ! + 650',
			text: 'Mise : 150 Valeur de la roue : 800'
		})
		},5000)
	}
	if (angle >= 283 && angle < 359) {
		money += 75;
		setTimeout(function(){
			loose.play();
		Swal.fire({
			icon: 'error',
			title: 'Dommage ! - 75',
			text: 'Mise : 150 Valeur de la roue : 75',
		})
		},5000)
	}
	console.log(money)
}
else{
	console.log("Nul ! tu es pauvre ")
}
	}
	





