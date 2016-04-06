window.onload = redimencionarLetra;
window.onresize = redimencionarLetra;

function redimencionarLetra () {
	var ancho = window.innerWidth;
	var resultado = (192*ancho)/1600; 
	document.getElementsByTagName('h1')[0].style.fontSize = resultado+"px";
}

