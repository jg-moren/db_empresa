
<?php  
class ControllerEmpresa{
	function adicionar($idEmpresa,$SiglaEmpresa,$NomeEmpresa){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into empresa(idEmpresa, SiglaEmpresa, NomeEmpresa) VALUES (?,?,?)");
		$gravar->execute(array($idEmpresa,$SiglaEmpresa,$NomeEmpresa));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from empresa where idEmpresa =?");
		$gravar->execute(array($id));

	}

	function editar($idEmpresa,$SiglaEmpresa,$NomeEmpresa){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE empresa SET SiglaEmpresa=?,NomeEmpresa=? WHERE idEmpresa=?");
		$gravar->execute(array($SiglaEmpresa,$NomeEmpresa,$idEmpresa));

	}
	function getId(){
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

