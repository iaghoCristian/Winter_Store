<?php include_once("../Model/Cliente.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ClienteDAO.php");
	  
	
	$conect = new Conection("localhost","root","","bd1");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$tab = $clienteDAO->consultarTodos($conect->getLink());
	
	
	$openTable="<table style =\"width:50%\" border=\"1px\">
		<tr>
			<th>CPF</th>
			<th>Nome</th>
			<th>Salario</th>
			<th>Nascimento</th>
		</th>";
	$bodyTable=	"";
	while($row = mysqli_fetch_assoc($tab)){
			$bodyTable = $bodyTable."<tr>
				<td>".$row['CPF']."</td>
				<td>".$row['Nome']."</td>
				<td>".$row['Salario']."</td>
				<td>".$row['Nascimento']."</td>
			</tr>";
		}
	$closeTable = "</table>";
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Titulo </title>
		</header>
	
		<body>".$openTable.$bodyTable.$closeTable.
			
			
				
			"</form>
		</body>

	</html>"

?>