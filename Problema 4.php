
<h1><center>Ejercicio 4</center></h1>
	<br>
	<h2><center>De entre todos los triánculos rectángulos de área 8 cm2, determina las dimensiones del que tiene la hipotenusa de menor longitud</center><h2>
	<center><image src="Triángulos.png" height="500px" Width="800px"></center>

<form>
	<input name="Area" id="area" value="8" placeholder="Area(cm2)" onkeyup="determinar()"/> 
<button onclick="calcular()">
Calcular</button>
</form>

<div id="h" style="
	padding:20px;
	background-color:grey
">
Resultado
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function determinar(){
	area=document.getElementById("area").value;
	area=parseInt(area);
	x=parseInt(x);
	y=parseInt(y);
	var x=4;
	var y=16/x;
	l=((x*x*x*x)+256)/x*x;
	h=Math.round(Math.sqrt(l));
	area=(x*y)/2
	document.getElementById("h").innerHTML=h+" centimetros";
} determinar();
</script>


<?php
if(isset($_GET)) print_r($_GET)

?>