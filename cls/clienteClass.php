<?php 

class clienteClass
{
	var $codigo;
	var $nome;
	var $email;
	var $telefone;
	var $endereco;
	var $resultado;

	public function mostrar()
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = 'select * from clientes';
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getOne($id)
	{
		$Oconn = new conexaoClass();
		$Oconn -> abrir_conexao();
		$sql = 'select * from clientes where idCliente = '. $id;
		$conn = $Oconn -> getconn();
		$this -> resultado = $conn -> query($sql);
	}
	public function getConsulta()
	{
		return $this -> resultado;
	}

}
 ?>