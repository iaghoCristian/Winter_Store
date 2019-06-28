<?php include_once("../Model/Arma.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ArmaDAO.php");
	  
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$armaDAO = new ArmaDAO();
	$tab = $armaDAO->consultarTodas($conect->getLink());
	
	
	$openTable=" 
				<table style =\"width:50%\" border=\"1px\">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Preco</th>
					</th>";
	$bodyTable=	"";
	while($row = mysqli_fetch_assoc($tab)){
			$bodyTable = $bodyTable."<tr>
										<td>".$row['ID']."</td>
										<td>".$row['nomeArma']."</td>
										<td>".$row['Tipo']."</td>
										<td>".$row['Preco']."</td>
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
		<h2>Consulta de Todas as Arma</h2>
		<div class=\"cadastro\">".$openTable.$bodyTable.$closeTable.
				
		"</form>
			<center><button type=\"button\"><a href=\"../View/Arma.html\"> Voltar </a></button></center>
		</body>

	</html>"

?>