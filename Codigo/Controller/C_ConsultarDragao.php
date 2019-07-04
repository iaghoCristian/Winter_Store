<?php include_once("../Model/Dragao.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/DragaoDAO.php");
	  
	$id= $_POST['id'];


	$dragao = new Dragao($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$dragaoDAO = new DragaoDAO();
	$row = $dragaoDAO->consultar($dragao,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Consulta de Dragao</h2>
			<div class=\"cadastro\">
			<form action=\"#\" method=\"post\">
				<label>ID: </label><input type=\"text\" name=\"id\" value=".$row['ID']." readonly><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeDragao']." readonly><br>
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$row['Preco']." readonly><br>
			
				<button type=\"button\"><a href=\"../View/Dragao.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>