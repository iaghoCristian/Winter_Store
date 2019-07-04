<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	$id= $_POST['id'];

	
	$casa = new Casa($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$casaDAO->ExcluirCasa($casa,$conect->getLink());

	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<div class=\"cadastro\">
				<center><button type=\"button\"><a href=\"../View/Casa.html\"> Voltar </a></button></center>
				<center><button type=\"button\"><a href=\"../View/ExcluirCasa.html\"> Excluir novamente </a></button></center>
			</div>
			<script>alert(\"Excluido com sucesso!\");</script>
		</body>

	</html>" 

	//header("location: ../View/Casa.html");
?>