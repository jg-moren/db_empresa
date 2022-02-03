<?php

class ModelPessoa  {
	
	function getTable()
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from pessoa");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
	function SearchTableId($id)
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from pessoa where idPessoa=?");
		$consulta->execute(array($id));
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
}

?>