<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	echo $_POST['id'];
	$id = isset($_POST['id']) ? $_POST['id'] : '';  
	//$id= $_POST['id'];
	$nome= $_POST['nomev'];
	$representante = $_POST['representante'];
	$patrimonio = $_POST['patrimonio'];
	
	$cliente = new Cliente($id,$nome,$representante,$patrimonio);
	$cliente->imprimirCliente();
	
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$clienteDAO->alterar($cliente,$conect->getLink());

?>