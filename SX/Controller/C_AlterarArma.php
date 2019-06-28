<?php include_once("../Model/Arma.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ArmaDAO.php");
	  
	//$id= $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	
	
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
			<h2> Alteração de Arma </h2>
			<div class=\"cadastro\">
			<form action=\"C_AlterarArma2.php\" method=\"post\">
				<input id=\"id\" name=\"id\" type=\"hidden\" value=".$row['ID'].">
				<label>ID: </label><input type=\"text\" name=\"id1\" value=".$row['ID']." disabled><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeArma']."><br>
				<label>Tipo: </label><input type=\"text\" name=\"tipo\" value=".$row['Tipo']."><br>
				<label>Preco: </label><input type=\"text\" name=\"preco\" value=".$row['Preco']."><br>
				
				<button type=\"submit\" value=\"enviar\">Enviar</button>
				<button type=\"reset\" value=\"apagar\">Apagar</button>
				<button type=\"button\"><a href=\"../View/Arma.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>