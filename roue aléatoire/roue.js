let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(Math.random() * 1000);
//let number = 90;
var angle = 0;
btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	//number += Math.ceil(Math.random() * 1000);
	console.log(number);
	angle = number%360;
	console.log(angle);
	
}