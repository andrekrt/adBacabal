<?php 
	session_start();
	if(!isset($_SESSION['id'])){

		header("Location:index.php?erro=1");

	}
	

	require_once("db.class.php");

	$congregacao = utf8_decode($_POST["congregacao"]);
	$area = utf8_decode($_POST["area"]);
	$supervisorSetor = utf8_decode($_POST["supervisorSetor"]);
	$supervisorSubSetor = utf8_decode($_POST["supervisorSubSetor"]);
	$lider = utf8_decode($_POST["lider"]);
	$tipoGrupo = utf8_decode($_POST["tipoGrupo"]);
	$nomeGrupo = utf8_decode($_POST["nomeGrupo"]);
	$id_usuario = $_SESSION['id'];

	$objDb = new db();
	$link = $objDb->conectarBd();
	
	$nomeGrupoExistente=false;
	
	$sql = "SELECT * FROM grupo WHERE nomeGrupo = '$nomeGrupo'";
	$resultado = mysqli_query($link,$sql);

	if($resultado){

		$dadosGrupo = mysqli_fetch_array($resultado);
		if(isset($dadosGrupo["nomeGrupo"])){

			$nomeGrupoExistente=true;

		}
	
	}else{

		echo "Erro ao tentar pesquisar os dados";

	}
	if($nomeGrupoExistente){

		$retornoGet='';

		if($nomeGrupoExistente){

			$retornoGet.="?erro_nomeGrupo=1";

		}

		header("Location:cadastroGrupo.php".$retornoGet);
		die();

	}

	$sql="INSERT INTO grupo (congregacao,area,supervisorSetor,supervisorSubSetor,lider,tipoGrupo, nomeGrupo, id_usuario)VALUES ('$congregacao', '$area', '$supervisorSetor', '$supervisorSubSetor', '$lider', '$tipoGrupo', '$nomeGrupo', '$id_usuario') ";

	if(mysqli_query($link,$sql)){

		echo "Grupo cadastrado com sucesso";

	}else{

		echo "Erro ao cadastrar";

	}

 ?>