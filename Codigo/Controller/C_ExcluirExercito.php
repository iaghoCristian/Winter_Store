<?php include_once("../Model/Exercito.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ExercitoDAO.php");
	  
	$id= $_POST['id'];

	
	$exercito = new Exercito($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$exercitoDAO = new ExercitoDAO();
	$exercitoDAO->excluir($exercito,$conect->getLink());

	//RETORNO DO EXCLUR

	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<div class=\"cadastro\">
				<center><button type=\"button\"><a href=\"../View/Exercito.html\"> Voltar </a></button></center>
				<center><button type=\"button\"><a href=\"../View/ExcluirExercito.html\"> Excluir novamente </a></button></center>
			</div>
			<script>alert(\"Excluido com sucesso!\");</script>
		</body>

	</html>" 

	//header("location: ../View/Casa.html");
?>