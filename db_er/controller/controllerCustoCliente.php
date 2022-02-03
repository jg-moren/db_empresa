
<?php  
class ControllerCustoCliente 	{
	function adicionar($idCustoCliente,$ValorHH,$idEmpresa,$idProduto,$DtLimite){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into custocliente(idCustoCliente, ValorHH, idEmpresa,idProduto,DtLimite) VALUES (?,?,?,?,?)");
		$gravar->execute(array($idCustoCliente,$ValorHH,$idEmpresa,$idProduto,$DtLimite));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from custocliente where idCustoCliente =?");
		$gravar->execute(array($id));

	}

	function editar($idCustoCliente,$ValorHH,$idEmpresa,$idProduto,$DtLimite){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE custocliente SET ValorHH=?,idEmpresa=?,idProduto=?,DtLimite=? WHERE idCustoCliente=?");
		$gravar->execute(array($ValorHH,$idEmpresa,$idProduto,$DtLimite,$idCustoCliente));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from custocliente");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idCustoCliente);
			# code...
		}
		return $array;
	}
	function getIdEmpresa(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from empresa");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idEmpresa);
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

