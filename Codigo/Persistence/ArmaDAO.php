<?php
	
	class ArmaDAO{
		
		function __construct(){
			
		}
		function cadastrarArma($Arma, $link){
			$query = "INSERT INTO `arma`(`ID`, `nomeArma`, `Tipo`, `Preco`) VALUES ('".
			$Arma->getId()."','".$Arma->getNome()."','".
			$Arma->getTipo()."',".$Arma->getPreco().");";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel salvar!".mysqli_error($link));
		
			}
			
		}
		
		function excluirArma($Arma,$link){
			$query = "DELETE FROM `arma` WHERE ID = '".$Arma->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel excluir!".mysqli_error($link));
			}
		}
		
		function consultarArma($Arma,$link){
			$query = "SELECT * FROM `arma` WHERE ID = '".$Arma->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		function consultarTodas($link){
			$query = "SELECT * FROM `arma` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		function alterarArma($Arma,$link){
			$query = "UPDATE `arma` SET `nomeArma`='".$Arma->getNome().
					"',`Tipo`='".$Arma->getTipo().
					"',`Preco`=".$Arma->getPreco().
					" WHERE id = '".$Arma->getId()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel alterar!".mysqli_error($link));
		
			}
            
		}
	}
	

?>