
<h1><center>Ejercicio 3</center></h1>
	<br>
	<h2><center>La edad de Sara es el triple que la de su hija. Dentro de 14 años será el doble. ¿Qué edades tienen Sara y su hija?</center><h2>

<form>
		Introducir cuantas veces más años tiene la madre (3 veces más=3)
	<input name="Sara" id="s" value="3" placeholder="Madre(cuantas veces mas)" onkeyup="determinar()"/> 
		Introducir hija (siempre 1)
	<input name="hija"id="h" value="1" placeholder="Hija(x)" onkeyup="determinar()"/> 
<button onclick="calcular()">
Calcular</button>
</form>

<div id="esara" style="
	padding:20px;
	background-color:grey
">
Edad de Sara
</div>
<div id="ehija" style="
	padding:20px;
	background-color:grey
">
Edad Hija
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");

function calcular(){
	s=document.getElementById("s").value;
	h=document.getElementById("h").value;
	s=parseInt(s);
	h=parseInt(h);
	ehija=parseInt(ehija);
	esara=parseInt(esara);
	y=h*14;
	x=2*y+14;
	esara=s*y;
	ehija=y;
	document.getElementById("esara").innerHTML=esara+" Años";
	document.getElementById("ehija").innerHTML=ehija+" Años";
} calcular();
</script>


<?php
if(isset($_GET)) print_r($_GET)

?>
