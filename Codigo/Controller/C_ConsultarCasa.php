<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	$id= $_POST['id'];

	
	$casa = new Casa($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$row = $casaDAO->consultarCasa($casa,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Consulta de Casa </h2>
			<div class=\"cadastro\">
			<form action=\"#\" method=\"post\">
				<label>ID: </label><input type=\"text\" name=\"id\" value=".$row['ID']." readonly><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeCasa']." readonly><br>
				<label>Representante: </label><input type=\"text\" name=\"representante\" value=".$row['Representante']." readonly><br>
				<label>Patrimonio: </label><input type=\"text\" name=\"patrimonio\" value=".$row['Patrimonio']." readonly><br>
			
				<button type=\"button\"><a href=\"../View/Casa.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>