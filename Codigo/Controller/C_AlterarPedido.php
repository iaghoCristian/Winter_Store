<?php include_once("../Model/Pedido.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/PedidoDAO.php");
	  
	//$id= $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	

	$pedido = new Pedido($id,"","","","","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$pedidoDAO = new PedidoDAO();
	$row = $pedidoDAO->consultarTeste($pedido,$conect->getLink());
	$precoP = $pedidoDAO->calcularPreco($pedido,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Alteração de Pedido </h2>
			<div class=\"cadastro\">
			<form action=\"C_AlterarPedido2.php\" method=\"get\">
				<input id=\"id\" name=\"id\" type=\"hidden\" value=".$row['idP'].">
				<label>ID: </label><input type=\"text\" name=\"id1\" value=".$row['idP']." disabled><br>
				<input id=\"id\" name=\"preco\" type=\"hidden\" value=".$precoP['precoT'].">
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$precoP['precoT']." disabled><br>

				<input id=\"id\" name=\"idCasa\" type=\"hidden\" value=".$row['idCasa'].">
				<label>Casa: </label><input type=\"text\" name=\"nomeCasa\" value=".$row['nomeCasa']."><br>
		
				<label>Arma: </label><input type=\"text\" name=\"idArma\" value=".$row['nomeArma']."><br>
				<label>Exercito: </label><input type=\"text\" name=\"idExercito\" value=".$row['nomeExercito']."><br>
				<label>Dragao: </label><input type=\"text\" name=\"idDragao\" value=".$row['nomeDragao']."><br>
				
				<button type=\"submit\" value=\"enviar\">Enviar</button>
				<button type=\"reset\" value=\"apagar\">Apagar</button>
				<button type=\"button\"><a href=\"../View/Pedido.html\"> Voltar </a></button>
			</form>
			</div>
		</body>


	</html>"

?>