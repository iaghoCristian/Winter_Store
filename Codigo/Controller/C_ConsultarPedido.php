<?php include_once("../Model/Pedido.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/PedidoDAO.php");
	  
	$id= $_POST['id'];

	
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
			<h2> Consulta de Pedido</h2>
			<div class=\"cadastro\">
			<form action=\"#\" method=\"post\">
			

				<label>ID: </label><input type=\"text\" name=\"id\" value=".$row['idP']." readonly><br>
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$precoP['precoT']." readonly><br>
				<label>Casa: </label><input type=\"text\" name=\"idCasa\" value=".$row['nomeCasa']." readonly><br>
				<label>Arma: </label><input type=\"text\" name=\"idArma\" value=".$row['nomeArma']." readonly><br>
				<label>Exercito: </label><input type=\"text\" name=\"idExercito\" value=".$row['nomeExercito']." readonly><br>
				<label>Dragao: </label><input type=\"text\" name=\"idDragao\" value=".$row['nomeDragao']." readonly><br>
			
				<button type=\"button\"><a href=\"../View/Pedido.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>

