<?php 

	$erro_nomeGrupo = isset($_GET['erro_nomeGrupo']) ? $_GET['erro_nomeGrupo'] : 0;

	session_start();
	if(!isset($_SESSION['id'])){

		header("Loation: index.php?erro=1");

	}

	

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Grupos</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Cadastrar Grupos</h1>
		<form method="post" action="realizarCadastro.php?<?php $_SESSION['id'] ?>">
			<table >
				<tr>
					<td>Congregação: </td>
					<td> <input type="text" name="congregacao" required></td>

				</tr>
				<tr>
					<td>Área:</td>
					<td> <input type="text" name="area" required><br></td>
				</tr>
				<tr>
					<td>Supervisor de Setor:</td>
					<td> <input type="text" name="supervisorSetor" required> <br></td>
				</tr>
				<tr>
					<td>Supervisor de SubSetor: </td>
					<td><input type="text" name="supervisorSubSetor" required><br></td>
				</tr>
				<tr>
					<td>Líder:</td>
					<td> <input type="text" name="lider"><br></td>
				</tr>
				<tr>
					<td>Tipo do Grupo: </td>
					<td>
						<select name="tipoGrupo">
								<option value="adulto">Adulto</option>
								<option value="adolescente">Adolescente</option>
								<option value="jovens">Jovens</option>
								<option value="crianca">Criança</option>
						</select><br>
					</td>
				</tr>
				<tr>
					<td>Nome do Grupo: </td>
					<td><input type="text" name="nomeGrupo"><br></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" name="cadastroGrupo" value="Cadastrar"></td>
				</tr>
			</table>
		</form>
		<?php 

					if($erro_nomeGrupo){

						echo "Esse nome de grupo já existe";

					}

				 ?>
	</body>
</html>