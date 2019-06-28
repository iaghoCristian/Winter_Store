<?php include_once("../Model/Arma.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ArmaDAO.php");
	  
	$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$tipo = $_POST['tipo'];
	$preco = $_POST['preco'];
	
	$arma = new Arma($id,$nome,$tipo,$preco);
	$arma->imprimirArma();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$armaDAO = new ArmaDAO();
	$armaDAO->CadastrarArma($arma,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/CadastrarArma.html\"> Cadastrar novamente </a></button></center>
			</div>
			<script>alert(\"Adicionado com sucesso!\");</script>
		</body>

	</html>" 


	//header("location: ../View/CadastrarCasa.html");
	

?>