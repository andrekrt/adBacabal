<?php 

	class db{

		private $host = 'localhost';
		private $user = 'root';
		private $senha = '';
		private $database = 'adBacabal';

		public function conectarBd(){

			$conexao = mysqli_connect($this->host, $this->user, $this->senha, $this->database);

			mysqli_set_charset($conexao, 'utf-8');

			if(mysqli_connect_errno()){

				echo "Erro ao conectar com o banco de dados " . mysqli_connect_errno();

			}
			return $conexao;

		}
	}

 ?>