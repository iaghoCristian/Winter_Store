<?php
	
	class CasaDAO{
		
		function __construct(){
		}
		/**Uma função que cadastra uma casa, fazendo uma requisição com o banco de dados
		 * utilizamos a variavel &Casa para representar a nossa casa
		 */
		function cadastrarCasa($Casa, $link){
			/** em &query inserimos na tabela casa e em suas determinadas colunas os valores que
			 * estão em &Casa
			 */
			$query = "INSERT INTO `casa`(`ID`, `nomeCasa`, `Representante`, `Patrimonio`) VALUES ('".
			$Casa->getId()."','".$Casa->getNome()."','".
			$Casa->getRepresentante()."',".$Casa->getPatrimonio().");";
			echo $query;
	
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel salvar!".mysqli_error($link));
		
			}
			
		}
		/**Uma função que exclui uma casa, fazendo uma requisição com o banco de dados
		 * utilizamos a variavel &Casa para representar a nossa casa
		 */
		function excluirCasa($Casa,$link){
			/** em &query excluimos na tabela casa e em suas determinadas colunas os valores que
			 * estão em &Casa
			 */
			$query = "DELETE FROM `casa` WHERE ID = '".$Casa->getId()."'";
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel excluir!".mysqli_error($link));
			}
		}
		
		/**Uma função que cconsulta uma casa, fazendo uma requisição com o banco de dados
		 * utilizamos a variavel &Casa para representar a nossa casa
		 */
		function consultarCasa($Casa,$link){
			/** em &query consultamos da tabela casa suas determinadas colunas os valores
			 */
			$query = "SELECT * FROM `casa` WHERE ID = '".$Casa->getId()."'";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return mysqli_fetch_assoc($r);
			
		}
		
		/**Uma função que consulta todas as casas, fazendo uma requisição com o banco de dados
		 * utilizamos a variavel &Casa para representar a nossa casa
		 */
		function consultarTodas($link){
			/** em &query consultamos da tabela casa suas determinadas colunas os valores de todas as casas
			 */
			$query = "SELECT * FROM `casa` ";
			
			$r = mysqli_query($link,$query);
			
			if(!$r){
				echo "Não foi possível consultar!";
				echo "erro mysql".mysqli_error();
				exit;
			}
			return $r;
			
		}

		/**Uma função que altera uma casa, fazendo uma requisição com o banco de dados
		 * utilizamos a variavel &Casa para representar a nossa casa
		 */
		function alterarCasa($Casa,$link){
			/** em &query alteramos na tabela casa suas determinadas colunas (exceto o ID)os valores que
			 * estão em &Casa
			 */
			$query = "UPDATE `casa` SET `nomeCasa`='".$Casa->getNome().
					"',`Representante`='".$Casa->getRepresentante().
					"',`Patrimonio`=".$Casa->getPatrimonio().
					" WHERE id = '".$Casa->getId()."'";
			echo$query;
			if(!mysqli_query($link,$query)){
				die ("Nao foi possivel alterar!".mysqli_error($link));
		
			}
            
		}
	}
	

?>