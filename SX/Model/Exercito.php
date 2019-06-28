<?php
	class Exercito{
		var $id,$nome,$populacao,$preco;
		
		/*function __construct(){
			$this->id = "";
			$this->nome = "";
			$this->representante = "";
			$this->patrimionio = 0;
			
		}
		*/
		function __construct($idv,$nomev,$populacaov,$precov){
			$this->id = $idv;
			$this->nome = $nomev;
			$this->populacao = $populacaov;
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
		
		function getPopulacao(){
			return $this->populacao;
		}
		function setPopulacao($populacaov){
			$this->populacao = $populacaov;
		}
		
		function getPreco(){
			return $this->preco;
		}
		function setPreco($precov){
			$this->preco = $precov;
		}
		
		function imprimirExercito(){
			echo $this->id." , ".$this->nome." , ".$this->populacao." , ".$this->preco;			
		}
	}




?>