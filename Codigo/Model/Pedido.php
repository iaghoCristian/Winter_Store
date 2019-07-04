<?php
	class Pedido{
		var $id, $idC, $idA, $idE, $idD, $preco;
		
		/*function __construct(){
			$this->id = "";
			$this->nome = "";
			$this->representante = "";
			$this->patrimionio = 0;
			
		}
		*/
		function __construct($idv, $idCv, $idAv, $idEv, $idDv, $precov){
			$this->id = $idv;
			$this->idC = $idCv;
			$this->idA = $idAv;
			$this->idE = $idEv;
			$this->idD = $idDv;
			$this->preco = $precov;
		}
		
		function getId(){
			return $this->id;
		}
		function setId($idv){
			$this->id= $idv;
		}

		function getIdCasa(){
			return $this->idC;
		}
		function setIdCasa($idCv){
			$this->idC= $idCv;
		}

		function getIdArma(){
			return $this->idA;
		}
		function setIdArma($idAv){
			$this->idA= $idAv;
		}
		
		function getIdExercito(){
			return $this->idE;
		}
		function setIdExercito($idEv){
			$this->idE= $idEv;
		}

		function getIdDragao(){
			return $this->idD;
		}
		function setIdDragao($idDv){
			$this->idD= $idDv;
		}

		function getPreco(){
			return $this->preco;
		}
		function setPreco($precov){
			$this->preco = $precov;
		}
		
		function imprimirPedido(){
			echo $this->id." , ".$this->preco;			
		}
	}




?>