<h1><center>Ejercicio 2</center></h1>
	<br>
	<h2><center>
		Se quiere construir un jardin de 1 m de ancho 
		alrededor de una fuente circular de 4 m de diametro. 
		Si los paquetes de cesped fuesen de 7 m2, 
		¿cuantos paquetes harían falta comprar para cubrir el jardin?
	</center><h2>
	<center><image src="Fuente 4m.png" height="500px" Width="500px"></center>

<form>
	<input name="Radio fuente" id="f" value="4" placeholder="Fuente" onkeyup="determinar()"/> 
	<input name="Radio jardin"id="j" value="1" placeholder="Jardín" onkeyup="determinar()"/>
	<input name="Tamaño de paquetes"id="tp" value="7" placeholder="Tamaño de paquetes" onkeyup="determinar()"/> 
<button onclick="resolver()">
Calcular</button>
</form>

<div id="c" style="
	padding:20px;
	background-color:grey
">
Metros de cesped
</div>

<div id="m" style="
	padding:20px;
	background-color:grey
">
Numero de paquetes
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function determinar(){
	f=document.getElementById("f").value;
	j=document.getElementById("j").value;
	tp=document.getElementById("tp").value;
	f=parseInt(f);
	j=parseInt(j);
	m=parseInt(m);
	tp=parseInt(tp);
	c=parseInt(c);
	c=Math.round(3.141592*((f+j)*(f+j))-(f*f));
	m=Math.round(c/tp);
	document.getElementById("m").innerHTML=m+" Paquetes";
	document.getElementById("c").innerHTML=c+" m2 de cesped";
} determinar();
</script>


<?php
if(isset($_GET['m'])){
$f = $_GET['f'];
$j = $_GET['j'];
$tp = $_GET['tp'];
$m = $_GET['m'];
$c = $_GET['c'];
echo $Math.round(3.141592*(($f+$j)*($f+$j))-($f*$f));
echo $Math.round($c/$tp);
}

?>
