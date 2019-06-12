<?php
	class Cliente{
		var $id,$nome,$representante,$patrimonio;
		
		/*function __construct(){
			$this->id = "";
			$this->nome = "";
			$this->representante = "";
			$this->patrimionio = 0;
			
		}
		*/
		function __construct($idv,$nomev,$representantev,$patrimoniov){
			$this->id = $idv;
			$this->nome = $nomev;
			$this->representante = $representantev;
			$this->patrimonio = $patrimoniov;
		}
		
		function getId(){
			return $this->id;
		}
		function setId($idv){
			$this->id= $idv;
		}
		
		function getNome(){
			return $this->nome;
		}
		function setNome($nomev){
			$this->nome = $nomev;
		}
		
		function getRepresentante(){
			return $this->representante;
		}
		function setRepresentante($representantev){
			$this->representante = $representantev;
		}
		
		function getPatrimonio(){
			return $this->patrimonio;
		}
		function setPatrimonio($patrimoniov){
			$this->patrimonio = $patrimoniov;
		}
		
		function imprimirCliente(){
			echo $this->id." , ".$this->nome." , ".$this->representante." , ".$this->patrimonio;			
		}
	}




?>