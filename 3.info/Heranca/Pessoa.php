<?php
class Pessoa{
	public $nome, $email;
	
	public function imprimir(){
		echo "<br>****Dados da Pessoa*****";
		echo "<br>Nome = " . $this->nome;
		echo "<br>E-mail = " . $this->email;
	}	
}
?>