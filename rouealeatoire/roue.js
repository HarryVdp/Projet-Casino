let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(10 * Math.random() * 1000);
//let timeout;

// Récupérer la valeur de la variable nom




// Envoyer la variable nom à la page traitement.php en utilisant la méthode POST

//let number = 90;
var angle = 0;
container.style.transform = "rotate(" + -11.5 + "deg)";
number = number - 11.5;
//number = 360 - 11.5;
btn.onclick = function () {
	if(money >= 150){
		money -= 150;
	container.style.transform = "rotate(" + number + "deg)";
	//function myFunction() {
	//timeout = setTimeout(alertFunc, 3000);
	//}
	//number += Math.ceil(Math.random() * 1000);
	console.log(number);
	angle = number % 360 + 11.5;
	console.log(angle);

	if (angle >= 0 && angle < 48) {
		money += 125;
		setTimeout(function(){

		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 125 crédits',
		})
		},5000)
	}
	if (angle >= 48 && angle < 76) {
		money += 250;
		setTimeout(function(){

		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 250 crédits'
		})
		},5000)
	}
	if (angle >= 76 && angle < 127) {
		money += 125;
		setTimeout(function(){

		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 125 crédits',
		})
		},5000)

	}
	if (angle >= 127 && angle < 196) {
		money += 85;
		setTimeout(function(){

		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 85 crédits',
		})
		},5000)
	}
	if (angle >= 196 && angle < 207) {
		money += 1200;
		setTimeout(function(){

		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 1200 crédits',
		})
		},5000)
	}
	if (angle >= 208 && angle < 268) {
		money += 100;
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 100 crédits',
		})
		},5000)
	}
	if (angle >= 268 && angle < 283) {
		money += 800;
		setTimeout(function(){
		Swal.fire({
			icon: 'success',
			title: 'Bravo !',
			text: 'Vous avez gagné 800 crédits'
		})
		},5000)
	}
	if (angle >= 283 && angle < 359) {
		money += 75;
		setTimeout(function(){
		Swal.fire({
			icon: 'error',
			title: 'Dommage !',
			text: 'Vous avez gagné 75 crédits',
		})
		},5000)
	}
	console.log(money)
	document.cookie = "money =" + money;
}
else{
	console.log("Nul ! tu es pauvre ")
}
fetch('rouealeatoire.php', {
	  method: 'POST',
	  body: JSON.stringify({money : money}),
	  headers: {
	    'Content-Type': 'application/json'
	  }
	}).then(response => {
	  console.log('La variable nom a été envoyée avec succès.');
	}).catch(error => {
	  console.error('Une erreur s\'est produite lors de l\'envoi de la variable nom.');
	});
	}
