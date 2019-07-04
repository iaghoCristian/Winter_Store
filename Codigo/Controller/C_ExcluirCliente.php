<?php include_once("../Model/Cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");
	  
	$cpf= $_POST['cpf'];

	
	$cliente = new Cliente($cpf,"","","");
	
	$conect = new Conection("localhost","root","","bd1");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->excluir($cliente,$conect->getLink());

?>