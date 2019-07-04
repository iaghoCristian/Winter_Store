<?php include_once("../Model/Cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");
	  
	$cpf= $_POST['cpf'];
	$nome= $_POST['nomev'];
	$salario = $_POST['salario'];
	$nasc = $_POST['nasc'];
	
	$cliente = new Cliente($cpf,$nome,$salario,$nasc);
	$cliente->imprimirCliente();
	
	
	$conect = new Conection("localhost","root","","bd1");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->cadastrar($cliente,$conect->getLink());

?>