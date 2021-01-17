<h1>Ley de Ohm</h1>
<form>
<input name="V" id="v" placeholder="Voltaje"
	value="1" onkeyup="calcular()"/>
<input name="R"id="r" placeholder="Resistencia"
	value="1" onkeyup="calcular()"/> 
<button onclick="calcular()">
Calcular</button>
</form>

<div id="i" style="
padding:20px;
background-color:grey
">
Resultado
</div>

<script>
//alert("hola mundo");
//console.log("hola otra vez");
function calcular(){
v=document.getElementById("v").value;
r=document.getElementById("r").value;
i=v/r;
document.getElementById("i").innerHTML=i+" Amperios";
}
</script>


<?php
if(isset($_GET)) print_r($_GET)
?>