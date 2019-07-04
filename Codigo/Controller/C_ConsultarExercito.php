<?php include_once("../Model/Exercito.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ExercitoDAO.php");
	  
	$id= $_POST['id'];

	
	$exercito = new Exercito($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$exercitoDAO = new ExercitoDAO();
	$row = $exercitoDAO->consultar($exercito,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Consulta de Exercito </h2>
			<div class=\"cadastro\">
			<form action=\"#\" method=\"post\">
				<label>ID: </label><input type=\"text\" name=\"id\" value=".$row['ID']." readonly><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeExercito']." readonly><br>
				<label>Populacao: </label><input type=\"text\" name=\"populacao\" value=".$row['Populacao']." readonly><br>
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$row['Preco']." readonly><br>
			
				<button type=\"button\"><a href=\"../View/Exercito.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>