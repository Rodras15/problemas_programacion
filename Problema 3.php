
<h1><center>Ejercicio 3</center></h1>
	<br>
	<h2><center>La edad de Sara es el triple que la de su hija. Dentro de 14 años será el doble. ¿Qué edades tienen Sara y su hija?</center><h2>

<form>
	<input name="Sara" id="s" value="3x" placeholder="Madre(cuantas veces mas)" onkeyup="determinar()"/> 
	<input name="hija"id="h" value="x" placeholder="Hija(x)" onkeyup="determinar()"/> 
<button onclick="calcular()">
Calcular</button>
</form>

<div id="s" style="
	padding:20px;
	background-color:grey
">
Edad de Sara
</div>
<div id="h" style="
	padding:20px;
	background-color:grey
">
Edad Hija
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");

function determinar(){
	var x=3*y;
	var y=s;
	s=document.getElementById("s").value;
	h=document.getElementById("h").value;
	x=document.getElementById("x").value;
	y=document.getElementById("y").value;
	s=parseInt(s);
	h=parseInt(h);
	x=parseInt(x);
	y=parseInt(y);
	y=3*x;
	x=14;
	document.getElementById("s").innerHTML=s+" Años";
	document.getElementById("h").innerHTML=h+" Años";
} determinar();
</script>


<?php
if(isset($_GET)) print_r($_GET)

?>