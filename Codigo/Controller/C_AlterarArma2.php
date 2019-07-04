<?php include_once("../Model/Arma.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ArmaDAO.php");
	  
	echo $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';  
	//$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$tipo = $_POST['tipo'];
	$preco = $_POST['preco'];
	
	$arma = new Arma($id,$nome,$tipo,$preco);
	$arma->imprimirArma();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$armaDAO = new ArmaDAO();
	$armaDAO->alterarArma($arma,$conect->getLink());

	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<div class=\"cadastro\">
				<center><button type=\"button\"><a href=\"../View/Arma.html\"> Voltar </a></button></center>
				<center><button type=\"button\"><a href=\"../View/AlterarArma.html\"> Alterar novamente </a></button></center>
			</div>
			<script>alert(\"Alterado com sucesso!\");</script>
		</body>

	</html>" 

?>