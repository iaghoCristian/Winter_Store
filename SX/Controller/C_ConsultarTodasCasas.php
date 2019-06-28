<?php include_once("../Model/Casa.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/CasaDAO.php");
	  
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$casaDAO = new CasaDAO();
	$tab = $casaDAO->consultarTodas($conect->getLink());
	
	
	$openTable=" 
				<table style =\"width:50%\" border=\"1px\">
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
										<td>".$row['nomeCasa']."</td>
										<td>".$row['Representante']."</td>
										<td>".$row['Patrimonio']."</td>
									</tr>";
		}
	$closeTable = "</table>";
	
	echo  "<!DOCTYPE html>
		<html lang = \"pt-br\">

		<header>
			<meta charset=\"utf-8\">
			<title> Winter Store </title>
			<link rel=\"stylesheet\" type=\"text/css\" href=\"estilo.css\"/>
		</header>
	
		<body>
		<h2>Consulta de Todas as Casas</h2>
		<div class=\"cadastro\">".$openTable.$bodyTable.$closeTable.
				
		"</form>
			<center><button type=\"button\"><a href=\"../View/Casa.html\"> Voltar </a></button></center>
		</body>

	</html>"

?>