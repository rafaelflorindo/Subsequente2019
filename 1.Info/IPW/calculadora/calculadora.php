<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];
	$operacao = $_GET["operacao"];
	
	switch($operacao) {
	case '+':
		$resultado = $n1 + $n2;
		break;
	case '-':
		$resultado = $n1 - $n2;
		break;
	case '*':
		$resultado = $n1 * $n2;
		break;	
	case '/':
		$resultado = $n1 / $n2;
		break;	
	default:
		echo "Operação Inválida";	
	}
	echo "Resultado = $resultado";
?>