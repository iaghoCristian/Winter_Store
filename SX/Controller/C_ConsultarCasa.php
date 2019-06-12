<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	$id= $_POST['id'];

	
	$cliente = new Cliente($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$row = $clienteDAO->consultar($cliente,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
		</header>
	
		<body>
			<h2> Consulta de Casa </h2>
			<form action=\"#\" method=\"post\">
				ID: <input type=\"text\" name=\"id\" value=".$row['ID']."><br>
				Nome: <input type=\"text\" name=\"nomev\" value=".$row['Nome']."><br>
				Representante: <input type=\"text\" name=\"representante\" value=".$row['Representante']."><br>
				Patrimonio: <input type=\"text\" name=\"patrimonio\" value=".$row['Patrimonio']."><br>
				
			</form>
		</body>

	</html>"

?>