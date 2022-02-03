
<?php  
class ControllerAtividadesPrevistas	{
	function adicionar($idAtividadesPrevistas,$idTrabalhoSolicitado,$idProduto,$idAtividade,$HorasPrevistas,$DetalheAtividade,$Obs){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into atividadesprevistas(idAtividadesPrevistas, idTrabalhoSolicitado, idProduto,idAtividade,HorasPrevistas,DetalheAtividade,Obs) VALUES (?,?,?,?,?,?,?)");
		$gravar->execute(array($idAtividadesPrevistas,$idTrabalhoSolicitado,$idProduto,$idAtividade,$HorasPrevistas,$DetalheAtividade,$Obs));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from atividadesprevistas where idAtividadesPrevistas =?");
		$gravar->execute(array($id));

	}

	function editar($idAtividadesPrevistas,$idTrabalhoSolicitado,$idProduto,$idAtividade,$HorasPrevistas,$DetalheAtividade,$Obs){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE atividadesprevistas SET idTrabalhoSolicitado=?,idProduto=?,idAtividade=?,HorasPrevistas=?,DetalheAtividade=?,Obs=? WHERE idAtividadesPrevistas=?");
		$gravar->execute(array($idTrabalhoSolicitado,$idProduto,$idAtividade,$HorasPrevistas,$DetalheAtividade,$Obs,$idAtividadesPrevistas));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from atividadesprevistas");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idAtividadesPrevistas);
			# code...
		}
		return $array;
	}
	function getIdAtividade(){
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
	function getIdTrabalhoSolicitado(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from trabalhosolicitado");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idTrabalhoSolicitado);
			# code...
		}
		return $array;
	}

	function getIdProduto(){
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

