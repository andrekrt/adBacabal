<?php 

	require_once("db.class.php");

	$objDb = new db();
	$link = $objDb->conectarBd();

	$sql = "SELECT nomeGrupo FROM grupo";
	$resultado = mysqli_query($link,$sql);
	$quantidade = mysqli_num_rows($resultado);

	if($quantidade==0){

		echo "Nenhum Grupo encontrado";

	}else{

		if($resultado){

			while($registro=mysqli_fetch_array($resultado)){

				$nome = $registro["nomeGrupo"];
				echo "<a href='cadastrarIntegrantes.html'>$nome</a> <br>";

			}

		}else{

			echo "Naõ foi encontrado nenhum grupo";

		}

	}
	
 ?>