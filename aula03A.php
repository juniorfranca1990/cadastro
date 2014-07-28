<?php 
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

function calculo($x,$y){
	
	$resultado = ($x+$y);
	echo "Resutado eh: ",$resultado;
}
calculo($valor1,$valor2);
?>