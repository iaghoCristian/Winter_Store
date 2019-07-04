<?php
	class Dragao{
		var $id,$nome,$preco;
		
		/*function __construct(){
			$this->id = "";
			$this->nome = "";
			$this->representante = "";
			$this->patrimionio = 0;
			
		}
		*/
		function __construct($idv,$nomev,$precov){
			$this->id = $idv;
			$this->nome = $nomev;
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
		
		function getPreco(){
			return $this->preco;
		}
		function setPreco($precov){
			$this->preco = $precov;
		}
		
		function imprimirDragao(){
			echo $this->id." , ".$this->nome." , ".$this->preco;			
		}
	}




?>