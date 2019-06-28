<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	//$id= $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	
	
	$casa = new Casa($id,"","","");
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$row = $casaDAO->consultarCasa($casa,$conect->getLink());
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
			<h2> Alteração de Casa </h2>
			<div class=\"cadastro\">
			<form action=\"C_AlterarCasa2.php\" method=\"post\">
				<input id=\"id\" name=\"id\" type=\"hidden\" value=".$row['ID'].">
				<label>ID: </label><input type=\"text\" name=\"id1\" value=".$row['ID']." disabled><br>
				<label>Nome: </label><input type=\"text\" name=\"nomev\" value=".$row['nomeCasa']."><br>
				<label>Representante: </label><input type=\"text\" name=\"representante\" value=".$row['Representante']."><br>
				<label>Patrimonio: </label><input type=\"text\" name=\"patrimonio\" value=".$row['Patrimonio']."><br>
				
				<button type=\"submit\" value=\"enviar\">Enviar</button>
				<button type=\"reset\" value=\"apagar\">Apagar</button>
				<button type=\"button\"><a href=\"../View/Casa.html\"> Voltar </a></button>
			</form>
			</div>
		</body>

	</html>"

?>