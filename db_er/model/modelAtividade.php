<?php

class ModelAtividade {
	
	function getTable()
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from atividade");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
	function SearchTableId($id)
	{	
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from atividade where idAtividade=?");
		$consulta->execute(array($id));
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		return $table;
	}
}

?>