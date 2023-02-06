let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(10* Math.random() * 1000);
//let number = 90;
var angle = 0;
container.style.transform = "rotate(" + -11.5 + "deg)";
number = number - 11.5;
//number = 360 - 11.5;
btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	//number += Math.ceil(Math.random() * 1000);
	console.log(number);
	angle = number%360+11.5;
	console.log(angle);
}