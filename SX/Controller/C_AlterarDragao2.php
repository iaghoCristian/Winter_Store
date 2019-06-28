<?php include_once("../Model/Dragao.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/DragaoDAO.php");
	  
	echo $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';  
	//$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$preco = $_POST['preco'];
	
	$dragao = new Dragao($id,$nome,$preco);
	$dragao->imprimirDragao();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$dragaoDAO = new DragaoDAO();
	$dragaoDAO->alterar($dragao,$conect->getLink());

	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<div class=\"cadastro\">
				<center><button type=\"button\"><a href=\"../View/Dragao.html\"> Voltar </a></button></center>
				<center><button type=\"button\"><a href=\"../View/AlterarDragao.html\"> Alterar novamente </a></button></center>
			</div>
			<script>alert(\"Alterado com sucesso!\");</script>
		</body>

	</html>" 

?>