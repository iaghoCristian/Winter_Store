<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$representante = $_POST['representante'];
	$patrimonio = $_POST['patrimonio'];
	
	$casa = new Casa($id,$nome,$representante,$patrimonio);
	$casa->imprimirCasa();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$casaDAO->CadastrarCasa($casa,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/CadastrarCasa.html\"> Cadastrar novamente </a></button></center>
			</div>
			<script>alert(\"Adicionado com sucesso!\");</script>
		</body>

	</html>" 


	//header("location: ../View/CadastrarCasa.html");
	

?>