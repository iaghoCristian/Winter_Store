<?php
	
	class PedidoDAO{
		
		function __construct(){
			
		}
		function cadastrar($Pedido, $link){
			$query = "INSERT INTO `pedido`(`ID`, `idCasa`, `idArma`, `idExercito`, `idDragao` , `Preco`) VALUES ('".
			$Pedido->getId()."','".$Pedido->getIdCasa()."','".$Pedido->getIdArma().
			"','".$Pedido->getIdExercito()."','".$Pedido->getIdDragao().
			"','".$Pedido->getPreco()."');";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel salvar!".mysqli_error($link));
		
			}
			
		}
		
		function excluir($Pedido,$link){
			$query = "DELETE FROM `pedido` WHERE ID = '".$Pedido->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel excluir!".mysqli_error($link));
			}
		}
		
		function consultar($Pedido,$link){
			$query = "SELECT * FROM `pedido` WHERE ID = '".$Pedido->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}

		function consultarTeste($Pedido,$link){
		$query ="SELECT arma.nomeArma AS nomeArma,
						dragao.nomeDragao AS nomeDragao,
						exercito.nomeExercito AS nomeExercito,
						casa.nomeCasa AS nomeCasa,
						pedido.id AS idP,
						pedido.preco AS precoP,
						casa.id AS idCasa
		  FROM `pedido`,`arma`,`dragao`,`exercito`, `casa` 
							WHERE '".$Pedido->getId()."' = pedido.ID and 
							arma.ID=pedido.idArma and dragao.ID=pedido.idDragao
							and exercito.ID=pedido.idExercito 
							and casa.ID=pedido.idCasa;";
		$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error($link);
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}	


		function consultarTodos($link){
			$query = "SELECT * FROM `pedido` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}
		
		function calcularPreco($Pedido,$link){
			$query =" SELECT arma.Preco + exercito.Preco + dragao.Preco AS precoT 
						FROM `pedido` INNER JOIN `arma` 
						INNER JOIN `dragao` 
						INNER JOIN `exercito` ON arma.ID = pedido.idArma 
						AND exercito.ID = pedido.idExercito 
						AND dragao.ID = pedido.idDragao 
						AND pedido.ID = '".$Pedido->getId()."';";

			$r = mysqli_query($link,$query);
				
				if(!$r){
					echo "Não foi possível consultar!";
					echo "erro mysql".mysqli_error();
					exit;
				} 
				return mysqli_fetch_assoc($r);
				
			}


		function alterar($Pedido,$idC,$link){
			echo "passou".$Pedido->getIdCasa();
			$query = "UPDATE `casa`,`arma`,`dragao`,`exercito`,`pedido` 
						SET casa.nomeCasa = $idC
					WHERE pedido.ID = '".$Pedido->getId()."' and 
							pedido.idArma = '".$Pedido->getIdArma()."' 
							and pedido.idDragao = '".$Pedido->getIdDragao()."'
							and pedido.idExercito = '".$Pedido->getIdExercito()."'
							and pedido.idCasa = '".$Pedido->getIdCasa()."';";;
			echo $query;
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel alterar!".mysqli_error($link));
		
			}
            
		}
	}
	

?>