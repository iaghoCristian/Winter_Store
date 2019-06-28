<?php include_once("../Model/Pedido.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/PedidoDAO.php");
	  
	echo $_GET['id'];
	$id = isset($_GET['id']) ? $_GET['id'] : '';  
	//$id= $_POST['id'];
	
	$idA = $_GET['idArma'];
	$idC = $_GET['idCasa'];
	$idD = $_GET['idDragao'];
	$idE = $_GET['idExercito'];
	$preco = $_GET['preco'];
	
	$pedido = new Pedido($id,$preco,$idC, $idA, $idE, $idD);
	$pedido->imprimirPedido();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$pedidoDAO = new PedidoDAO();
	
	echo $pedido->getIdCasa();

	$pedidoDAO->alterar($pedido,$idC,$conect->getLink());

	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<div class=\"cadastro\">
				<center><button type=\"button\"><a href=\"../View/Pedido.html\"> Voltar </a></button></center>
				<center><button type=\"button\"><a href=\"../View/AlterarPedido.html\"> Alterar novamente </a></button></center>
			</div>
			<script>alert(\"Alterado com sucesso!\");</script>
		</body>

	</html>" 

?>