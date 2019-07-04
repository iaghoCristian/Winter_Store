<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	echo $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';  
	//$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$representante = $_POST['representante'];
	$patrimonio = $_POST['patrimonio'];
	
	$casa = new Casa($id,$nome,$representante,$patrimonio);
	$casa->imprimirCasa();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$casaDAO->AlterarCasa($casa,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/AlterarCasa.html\"> Alterar novamente </a></button></center>
			</div>
			<script>alert(\"Alterado com sucesso!\");</script>
		</body>

	</html>" 

?>