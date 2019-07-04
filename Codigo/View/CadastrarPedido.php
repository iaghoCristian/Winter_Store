<?php include_once("../Persistence/Conection.php");
?>

<!DOCTYPE html>
<html lang = "pt-br">

	<header>
		<META charset= "utf-8">
		<title> Winter Store </title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</header>
	
	<body>

		<h2> Cadastro de Pedido </h2>
		<div class="cadastro">
			<form action="../Controller/C_CadastrarPedido.php" method="post">
				<label>ID: </label><input type="text" name="id" ><br>
				
				<label>Casa:</label>
				<select id="idCasa" name="idCasa" required>
  					<option>Selecione a casa</option>
  						<?php
							$conect = new Conection("localhost","root","","casa");
							$conect->conectar();
							$result_casa = "SELECT * FROM casa";
							$resultNome = mysqli_query($conect->getLink(), $result_casa);
							while( $row_casa = mysqli_fetch_assoc($resultNome)){ ?>
								<option value = "<?php echo $row_casa['ID']; ?>"><?php echo $row_casa['nomeCasa']; ?>
								</option> 
								<?php
							}
							?>
				</select>

				<label>Arma:</label> 
				<select id="idArma" name="idArma">
  					<option>Selecione a arma</option>
  						<?php
							$conect = new Conection("localhost","root","","casa");
							$conect->conectar();
							$result_arma = "SELECT * FROM arma";
							$resultNome = mysqli_query($conect->getLink(), $result_arma);
							while( $row_arma = mysqli_fetch_assoc($resultNome)){ ?>
								<option value = "<?php echo $row_arma['ID']; ?>"><?php echo $row_arma['nomeArma']; ?>
								</option> 
								<?php
							}
							?>
				</select>

				<label>Exercito:</label>
				<select id="idExercito" name="idExercito">
  					<option>Selecione o exercito</option>
  						<?php
							$conect = new Conection("localhost","root","","casa");
							$conect->conectar();
							$result_exercito = "SELECT * FROM exercito";
							$resultNome = mysqli_query($conect->getLink(), $result_exercito);
							while( $row_exercito = mysqli_fetch_assoc($resultNome)){ ?>
								<option value = "<?php echo $row_exercito['ID']; ?>"><?php echo $row_exercito['nomeExercito']; ?>
								</option> 
								<?php
							}
							?>
				</select>

				<label>Dragao:</label>
				<select id="idDragao" name="idDragao">
  					<option>Selecione o dragao</option>
  						<?php
							$conect = new Conection("localhost","root","","casa");
							$conect->conectar();
							$result_dragao = "SELECT * FROM dragao";
							$resultNome = mysqli_query($conect->getLink(), $result_dragao);
							while( $row_dragao = mysqli_fetch_assoc($resultNome)){ ?>
								<option value = "<?php echo $row_dragao['ID']; ?>"><?php echo $row_dragao['nomeDragao']; ?>
								</option> 
								<?php
							}
							?>
				</select>
				<br>
				<button type="submit" value="Enviar">Enviar</button>
				<button type="reset" value="Apagar">Apagar</button>
				<button type="button"><a href="Pedido.html"> Voltar </a></button>
				
			</form>
		</div>
	</body>

</html>