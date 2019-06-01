<?php
//empty — Determina se a variável é vazia
//isset — Informa se a variável foi iniciada
//print_r($_POST);//imprimir vetores
	if($_POST) {
		if(isset($_POST["num1"]) && isset($_POST["num2"])) {
			if(!empty($_POST["num1"]) && empty(!$_POST["num2"])) 				{			
				echo "Num1 = " .  $num1 = $_POST["num1"];
				echo "<br>Num2 = " .  $num2 = $_POST["num2"];
			}else {
				echo "Os campos estão vazios";
			}
		}else {
			echo "Não existem os campos.";
		}
	}else {
		echo "Não recebemos os dados do formulário";	
	}
?>