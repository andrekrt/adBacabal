<?php 

	require_once("db.class.php");

	$congregacao = $_POST["congregacao"];
	$area = $_POST["area"];
	$supervisorSetor = $_POST["supervisorSetor"];
	$supervisorSubSetor = $_POST["supervisorSubSetor"];
	$lider = $_POST["lider"];
	$tipoGrupo = $_POST["tipoGrupo"];
	$nomeGrupo = $_POST["nomeGrupo"];

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

			$retornoGet.="erro_email=1&";

		}

		header("Location:cadastroGrupo.html".$retornoGet);
		die();

	}

	$sql="INSERT INTO grupo (congregacao,area,supervisorSetor,supervisorSubSetor,lider,tipoGrupo, nomeGrupo)VALUES ('$congregacao', '$area', '$supervisorSetor', '$supervisorSubSetor', '$lider', '$tipoGrupo', '$nomeGrupo')";

	if(mysqli_query($link,$sql)){

		echo "Grupo cadastrado com sucesso";

	}else{

		echo "Erro ao cadastrar";

	}

 ?>