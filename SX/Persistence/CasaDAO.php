<?php
	
	class ClienteDAO{
		
		function __construct(){
			
		}
		function cadastrar($Cliente, $link){
			$query = "INSERT INTO `casa`(`ID`, `Nome`, `Representante`, `Patrimonio`) VALUES ('".
			$Cliente->getId()."','".$Cliente->getNome()."','".
			$Cliente->getRepresentante()."',".$Cliente->getPatrimonio().");";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel salvar, kéridas".mysqli_error($link));
		
			}
			echo "salvo gatan";
			
		}
		
		function excluir($Cliente,$link){
			$query = "DELETE FROM `casa` WHERE ID = '".$Cliente->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel excluir, kéridas".mysqli_error($link));
		
			}
			echo "excluiu gatan";
		}
		
		function consultar($Cliente,$link){
			$query = "SELECT * FROM `casa` WHERE ID = '".$Cliente->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "não consultou";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		function consultarTodos($link){
			$query = "SELECT * FROM `casa` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "não consultou";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		function alterar($Cliente,$link){
			$query = "UPDATE `casa` SET `Nome`='".$Cliente->getNome().
					"',`Representante`='".$Cliente->getRepresentante().
					"',`Patrimonio`=".$Cliente->getPatrimonio().
					" WHERE id = '".$Cliente->getId()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel alterar, cansada".mysqli_error($link));
		
			}
			echo "alterada";
            
		}
	}
	

?>