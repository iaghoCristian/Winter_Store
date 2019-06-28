<?php
	
	class DragaoDAO{
		
		function __construct(){
			
		}
		function cadastrar($Dragao, $link){
			$query = "INSERT INTO `dragao`(`ID`, `nomeDragao`, `Preco`) VALUES ('".
			$Dragao->getId()."','".$Dragao->getNome()."',".
			$Dragao->getPreco().");";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel salvar!".mysqli_error($link));
		
			}
			
		}
		
		function excluir($Dragao,$link){
			$query = "DELETE FROM `dragao` WHERE ID = '".$Dragao->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel excluir!".mysqli_error($link));
			}
		}
		
		function consultar($Dragao,$link){
			$query = "SELECT * FROM `dragao` WHERE ID = '".$Dragao->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		function consultarTodos($link){
			$query = "SELECT * FROM `dragao` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		function alterar($Dragao,$link){
			$query = "UPDATE `dragao` SET `nomeDragao`='".$Dragao->getNome().
					"',`Preco`=".$Dragao->getPreco().
					" WHERE id = '".$Dragao->getId()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel alterar!".mysqli_error($link));
		
			}
            
		}
	}
	

?>