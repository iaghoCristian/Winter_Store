<?php include_once("../Model/Pedido.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/PedidoDAO.php");
	  
	$id= $_POST['id'];

	
	$pedido = new Pedido($id,"","","","","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$pedidoDAO = new PedidoDAO();
	$pedidoDAO->excluir($pedido,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/ExcluirPedido.html\"> Excluir novamente </a></button></center>
			</div>
			<script>alert(\"Excluido com sucesso!\");</script>
		</body>

	</html>" 

	//header("location: ../View/Casa.html");
?>