<?php
	class Cliente{
		var $cpf,$nome,$salario,$nasc;
		
		/*function __construct(){
			$this->cpf = "";
			$this->nome = "";
			$this->salario = 0;
			$this->nasc = "";
			
		}
		*/
		function __construct($cpfv,$nomev,$salariov,$nascv){
			$this->cpf = $cpfv;
			$this->nome = $nomev;
			$this->salario = $salariov;
			$this->nasc = $nascv;
		}
		
		function getCpf(){
			return $this->cpf;
		}
		function setCpf($cpfv){
			$this->cpf = $cpfv;
		}
		
		function getNome(){
			return $this->nome;
		}
		function setNome($nomev){
			$this->nome = $nomev;
		}
		
		function getSalario(){
			return $this->salario;
		}
		function setSalario($salariov){
			$this->salario = $salariov;
		}
		
		function getNasc(){
			return $this->nasc;
		}
		function setNasc($nascv){
			$this->nasc = $nascv;
		}
		
		function imprimirCliente(){
			echo $this->cpf." , ".$this->nome." , ".$this->salario." , ".$this->nasc;			
		}
	}




?>