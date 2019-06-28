<?php
	class Arma{
		var $id,$nome,$tipo,$preco;
		
		/*function __construct(){
			$this->id = "";
			$this->nome = "";
			$this->representante = "";
			$this->patrimionio = 0;
			
		}
		*/
		function __construct($idv,$nomev,$tipov,$precov){
			$this->id = $idv;
			$this->nome = $nomev;
			$this->tipo = $tipov;
			$this->preco = $precov;
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
		
		function getTipo(){
			return $this->tipo;
		}
		function setTipo($tipov){
			$this->tipo = $tipov;
		}
		
		function getPreco(){
			return $this->preco;
		}
		function setPreco($precov){
			$this->preco = $precov;
		}
		
		function imprimirArma(){
			echo $this->id." , ".$this->nome." , ".$this->tipo." , ".$this->preco;			
		}
	}




?>