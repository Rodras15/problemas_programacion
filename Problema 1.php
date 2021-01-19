
<h1><center>Ejercicio 1</center></h1>
	<br>
	<h2><center>Un estanque circular de 6m de radio está rodeado por un sendero de 1m de anchura. Halla el área del sendero</center><h2>
	<center><image src="Fuente 1 metro.png" height="500px" Width="800px"></center>

<form>
	<input name="Radio estanque" id="e" value="6" placeholder="Estanque" onkeyup="determinar()"/> 
	<input name="Radio sendero"id="s" value="1" placeholder="Sendero" onkeyup="determinar()"/> 
<button onclick="calcular()">
Calcular</button>
</form>

<div id="a" style="
	padding:20px;
	background-color:grey
">
Resultado
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function determinar(){
	e=document.getElementById("e").value;
	s=document.getElementById("s").value;
	e=parseInt(e);
	s=parseInt(s);
	a=Math.round( 3.141592*(((e+s)*(e+s))-(e*e)))
	document.getElementById("a").innerHTML=a+" Metros cuadrados";
} determinar();
</script>


<?php
if(isset($_GET)) print_r($_GET)

?>
