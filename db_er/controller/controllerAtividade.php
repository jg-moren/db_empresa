
<?php  
class ControllerAtividade{
	function adicionar($idAtividade,$AbrAtividade,$Descricao){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into atividade(idAtividade, AbrAtividade, Descricao) VALUES (?,?,?)");
		$gravar->execute(array($idAtividade,$AbrAtividade,$Descricao));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from atividade where idAtividade =?");
		$gravar->execute(array($id));

	}

	function editar($idAtividade,$AbrAtividade,$Descricao){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE atividade SET AbrAtividade=?,Descricao=? WHERE idAtividade=?");
		$gravar->execute(array($AbrAtividade,$Descricao,$idAtividade));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from atividade");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idAtividade);
			# code...
		}
		return $array;
	}
}

?>

