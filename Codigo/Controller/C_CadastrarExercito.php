<?php include_once("../Model/Exercito.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ExercitoDAO.php");
	  
	$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$populacao = $_POST['populacao'];
	$preco = $_POST['preco'];
	
	$exercito = new Exercito($id,$nome,$populacao,$preco);
	$exercito->imprimirExercito();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$exercitoDAO = new ExercitoDAO();
	$exercitoDAO->cadastrar($exercito,$conect->getLink());

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
				<center><button type=\"button\"><a href=\"../View/ExercitoCasa.html\"> Cadastrar novamente </a></button></center>
			</div>
			<script>alert(\"Adicionado com sucesso!\");</script>
		</body>

	</html>" 


	//header("location: ../View/CadastrarCasa.html");
	

?>