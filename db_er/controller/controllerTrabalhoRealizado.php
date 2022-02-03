
<?php  
class ControllerTrabalhoRealizado 	{
	function adicionar($idTrabalhoRealizado,$idAtividadesPrevistas,$idPessoa,$DtTrabRealizado,$Detalhe,$HorasAplicadas){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into trabalhorealizado(idTrabalhoRealizado, idAtividadesPrevistas, idPessoa,DtTrabRealizado,Detalhe,HorasAplicadas) VALUES (?,?,?,?,?,?)");
		$gravar->execute(array($idTrabalhoRealizado,$idAtividadesPrevistas,$idPessoa,$DtTrabRealizado,$Detalhe,$HorasAplicadas));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from trabalhorealizado where idTrabalhoRealizado =?");
		$gravar->execute(array($id));

	}

	function editar($idTrabalhoRealizado,$idAtividadesPrevistas,$idPessoa,$DtTrabRealizado,$Detalhe,$HorasAplicadas){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE trabalhorealizado SET idAtividadesPrevistas=?,idPessoa=?,DtTrabRealizado=?,Detalhe=?,HorasAplicadas=? WHERE idTrabalhoRealizado=?");
		$gravar->execute(array($idAtividadesPrevistas,$idPessoa,$DtTrabRealizado,$Detalhe,$HorasAplicadas,$idTrabalhoRealizado));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from trabalhorealizado ");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idTrabalhoRealizado);
			# code...
		}
		return $array;
	}
	function getIdAtividadesPrevistas(){
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

	function getIdPessoa(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from pessoa");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idPessoa);
			# code...
		}
		return $array;
	}

}

?>

