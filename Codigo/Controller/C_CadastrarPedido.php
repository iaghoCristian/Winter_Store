<?php include_once("../Model/Pedido.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/PedidoDAO.php");
	  
	$id= $_POST['id'];
	$preco = $_POST['preco'];
	$idC = $_POST['idCasa'];
	$idA = $_POST['idArma'];
	$idE = $_POST['idExercito'];
	$idD = $_POST['idDragao'];

	
	
	$pedido = new Pedido($id, $idC, $idA, $idE, $idD, $preco);
	$pedido->imprimirPedido();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$pedidoDAO = new PedidoDAO();
	$pedidoDAO->cadastrar($pedido,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/CadastrarPedido.php\"> Cadastrar novamente </a></button></center>
			</div>
			<script>alert(\"Adicionado com sucesso!\");</script>
		</body>

	</html>" 


	//header("location: ../View/CadastrarCasa.html");
	

?>