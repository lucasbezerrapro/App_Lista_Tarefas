<?php

class Conexao {

	private $host = 'monorail.proxy.rlwy.net';
	private $dbname = 'railway';
	private $user = 'root';
	private $pass = 'Fb3f3FeA33EHBBaCgF1eaGF1A23-555G';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'. $e->getMessage() .'</p>';
		}
	}
}

?>
