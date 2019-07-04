<?php include_once("../Model/Exercito.php");
	  include_once("../Persistence/Conection.php");
	  include_once("../Persistence/ExercitoDAO.php");
	  
	
	$conect = new Conection("localhost","root","","casa");
	$conect-> conectar();
	
	$exercitoDAO = new ExercitoDAO();
	$tab = $exercitoDAO->consultarTodos($conect->getLink());
	
	
	$openTable=" 
				<table style =\"width:50%\" border=\"1px\">
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Populacao</th>
						<th>Preco</th>
					</th>";
	$bodyTable=	"";
	while($row = mysqli_fetch_assoc($tab)){
			$bodyTable = $bodyTable."<tr>
										<td>".$row['ID']."</td>
										<td>".$row['nomeExercito']."</td>
										<td>".$row['Populacao']."</td>
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
		<h2>Consulta de Todos os Exercito</h2>
		<div class=\"cadastro\">".$openTable.$bodyTable.$closeTable.
				
		"</form>
			<center><button type=\"button\"><a href=\"../View/Exercito.html\"> Voltar </a></button></center>
		</body>

	</html>"

?>