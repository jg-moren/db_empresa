<?php

class ModelCustoCliente  {
	
	function getTable()
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from custocliente");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
	function SearchTableId($id)
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from custocliente where idCustoCliente=?");
		$consulta->execute(array($id));
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
}

?>