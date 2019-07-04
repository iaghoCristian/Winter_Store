<?php include_once("../Model/Cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");
	  
	$cpf= $_POST['cpf'];

	
	$cliente = new Cliente($cpf,"","","");
	
	$conect = new Conection("localhost","root","","bd1");
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
			<h2> Alteração de Cliente </h2>
			<form action=\"C_AlterarCliente2.php\" method=\"post\">
				CPF: <input type=\"text\" name=\"cpf\" value=".$row['CPF']." disabled><br>
				Nome: <input type=\"text\" name=\"nomev\" value=".$row['Nome']."><br>
				Salario: <input type=\"text\" name=\"salario\" value=".$row['Salario']."><br>
				Nascimento: <input type=\"date\" name=\"nasc\" value=".$row['Nascimento']."><br>
				
				<input type=\"submit\" value=\"enviar\">
				<input type=\"reset\" value=\"apagar\">
			</form>
		</body>

	</html>"

?>