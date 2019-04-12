<?php
include ("Pessoa.php");
class Aluno extends Pessoa{
	public $registroAcademico;	
	
	public function imprimir(){
		parent::imprimir();
		echo "<br>****Dados do Aluno*****";
		echo "<br>Registro = " . $this->registroAcademico;
	}
}
?>