<?php 

	session_start();

	require_once('db.class.php');

	$login = $_GET['usuario'];
	$senha = $_GET['senha'];

	$sql = "SELECT id, usuario FROM login WHERE usuario='$login' AND senha='$senha'";
	$objDb = new db();
	$link= $objDb->conectarBd();

	$resultado = mysqli_query($link, $sql);

	if($resultado){

		$dadosUsuario = mysqli_fetch_array($resultado);

		if(isset($dadosUsuario['usuario'])){

			$_SESSION['id'] = $dadosUsuario['id'];
			$_SESSION['usuario'] = $dadosUsuario['usuario'];

			header("Location: home.php");

		}else{

			header("Location: index.php?erro=1");

		}	

	}else{

		echo "erro na consulta";

	}

 ?>