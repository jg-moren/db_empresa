
<?php  
class ControllerPessoa 	{
	function adicionar($idPessoa,$idEmpresa,$Apelido,$Nome,$email,$Telefone){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into pessoa(idPessoa, idEmpresa, Apelido,Nome,email,Telefone) VALUES (?,?,?,?,?,?)");
		$gravar->execute(array($idPessoa,$idEmpresa,$Apelido,$Nome,$email,$Telefone));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from pessoa where idPessoa =?");
		$gravar->execute(array($id));

	}

	function editar($idPessoa,$idEmpresa,$Apelido,$Nome,$email,$Telefone){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE pessoa SET idEmpresa=?,Apelido=?,Nome=?,email=?,Telefone=? WHERE idPessoa=?");
		$gravar->execute(array($idEmpresa,$Apelido,$Nome,$email,$Telefone,$idPessoa));

	}
	function getId(){
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
}

?>

