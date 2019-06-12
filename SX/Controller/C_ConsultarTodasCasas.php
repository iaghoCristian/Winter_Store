<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$clienteDAO = new ClienteDAO();
	$tab = $clienteDAO->consultarTodos($conect->getLink());
	
	
	$openTable="<table style =\"width:50%\" border=\"1px\">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Representante</th>
			<th>Patrimonio</th>
		</th>";
	$bodyTable=	"";
	while($row = mysqli_fetch_assoc($tab)){
			$bodyTable = $bodyTable."<tr>
				<td>".$row['ID']."</td>
				<td>".$row['Nome']."</td>
				<td>".$row['Representante']."</td>
				<td>".$row['Patrimonio']."</td>
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