<?php 

	session_start();
	if(!isset($_SESSION['usuario'])){

		header("Location: index.php?erro=1");

	}

	require_once("db.class.php");
	$objDb = new db();
	$link = $objDb->conectarBd();

	$idUsuario = $_SESSION['id'];
	$sql = "SELECT * FROM login WHERE id='$idUsuario'";

	$resultado = mysqli_query($link,$sql);
	if($resultado){

		while($registro=mysqli_fetch_array($resultado, MYSQL_ASSOC)){

			$id=$registro['id'];
			$usuario=$registro['usuario'];
			$senha=$registro['senha'];

			echo "ID = $id <br>";
			echo "Usuario = $usuario <br>";
			echo "Senah = $senha <br>";

		}

	}else{

		echo "Erro ao executar a consulta";
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="cadastroGrupo.html">Cadastrar Novo Grupo</a><br>
 	<a href="listarGrupo.php"> Listar Todos os Grupos</a><br>
 	<a href="sair.php">Sair</a>
 </body>
 </html>