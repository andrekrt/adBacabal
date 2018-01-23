<?php 

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="formulario">
			<form method="get" action="logar.php" >
			usuario: <input type="text" name="usuario"><br>
			senha: <input type="password" name="senha"><br><br>
			<input type="submit" name="entrar" value="entrar">
			</form>	
			<a href="cadastro.php">cadastre-se</a><br>
			<?php 

				if($erro==1){

					echo "Usuário ou senha inválido(s)";

				}

			 ?>
		</div>
		
	</body>
</html>