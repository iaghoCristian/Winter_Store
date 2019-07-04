<?php
	
	class ExercitoDAO{
		
		function __construct(){
			
		}
		function cadastrar($Exercito, $link){
			$query = "INSERT INTO `exercito`(`ID`, `nomeExercito`, `Populacao`, `Preco`) VALUES ('".
			$Exercito->getId()."','".$Exercito->getNome()."','".
			$Exercito->getPopulacao()."',".$Exercito->getPreco().");";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel salvar!".mysqli_error($link));
		
			}
			
		}
		
		function excluir($Exercito,$link){
			$query = "DELETE FROM `exercito` WHERE ID = '".$Exercito->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel excluir!".mysqli_error($link));
			}
		}
		
		function consultar($Exercito,$link){
			$query = "SELECT * FROM `exercito` WHERE ID = '".$Exercito->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		function consultarTodos($link){
			$query = "SELECT * FROM `exercito` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		function alterar($Exercito,$link){
			$query = "UPDATE `exercito` SET `nomeExercito`='".$Exercito->getNome().
					"',`Populacao`='".$Exercito->getPopulacao().
					"',`Preco`=".$Exercito->getPreco().
					" WHERE id = '".$Exercito->getId()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel alterar!".mysqli_error($link));
		
			}
            
		}
	}
	

?>