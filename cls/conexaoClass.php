<?php

class conexaoClass
{
	var $conn;

	function abrir_conexao()
	{
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = 'root';
		$banco = 'lpw_exemplo';
	
		$this->conn = new mysqli ($servidor,$usuario,$senha,$banco);
		
	}
	function getConn()
	{
		return $this->conn;
	}


}


?>