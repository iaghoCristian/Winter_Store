<?php
	
	class ClienteDAO{
		
		function __construct(){
			
		}
		function cadastrar($Cliente, $link){
			$query = "INSERT INTO `cliente`(`CPF`, `Nome`, `Salario`, `Nascimento`) VALUES ('".
			$Cliente->getCpf()."','".$Cliente->getNome()."',".
			$Cliente->getSalario().",'".$Cliente->getNasc()."');";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel salvar, kéridas".mysqli_error($link));
		
			}
			echo "salvo gatan";
			
		}
		
		function excluir($Cliente,$link){
			$query = "DELETE FROM `cliente` WHERE CPF = '".$Cliente->getCpf()."'";
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel excluir, kéridas".mysqli_error($link));
		
			}
			echo "excluiu gatan";
		}
		
		function consultar($Cliente,$link){
			$query = "SELECT * FROM `cliente` WHERE CPF = '".$Cliente->getCpf()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "não consultou";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		function consultarTodos($link){
			$query = "SELECT * FROM `cliente` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "não consultou";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		function alterar($Cliente,$link){
			$query = "UPDATE `cliente` SET `Nome`='".$Cliente->getNome().
					"',`Salario`=".$Cliente->getSalario().
					",`Nascimento`='".$Cliente->getNasc().
					"' WHERE CPF = '".$Cliente->getCpf()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("nao foi possivel alterar, cansada".mysqli_error($link));
		
			}
			echo "alteradaa";
		}
	}
	

?>