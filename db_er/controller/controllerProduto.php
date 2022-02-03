
<?php  
class ControllerProduto{
	function adicionar($idProduto,$AbrProduto,$Descricao){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into produto(idProduto, AbrProduto, Descricao) VALUES (?,?,?)");
		$gravar->execute(array($idProduto,$AbrProduto,$Descricao));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from produto where idProduto =?");
		$gravar->execute(array($id));

	}

	function editar($idProduto,$AbrProduto,$Descricao){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE produto SET AbrProduto=?,Descricao=? WHERE idProduto=?");
		$gravar->execute(array($AbrProduto,$Descricao,$idProduto));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from produto");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idProduto);
			# code...
		}
		return $array;
	}
}

?>

