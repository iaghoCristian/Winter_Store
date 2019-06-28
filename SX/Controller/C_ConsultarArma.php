<?php include_once("../Model/Arma.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ArmaDAO.php");
	  
	$id= $_POST['id'];

	
	$arma = new Arma($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$armaDAO = new ArmaDAO();
	$row = $armaDAO->consultarArma($arma,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Consulta de Arma </h2>
			<div class=\"cadastro\">
			<form action=\"#\" method=\"post\">
				<label>ID: </label><input type=\"text\" name=\"id\" value=".$row['ID']." readonly><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeArma']." readonly><br>
				<label>Tipo: </label><input type=\"text\" name=\"tipo\" value=".$row['Tipo']." readonly><br>
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$row['Preco']." readonly><br>
			
				<button type=\"button\"><a href=\"../View/Arma.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>