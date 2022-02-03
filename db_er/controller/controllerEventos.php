
<?php  
class ControllerEventos 	{
	function adicionar($idEvento,$idTrabalhoSolicitado,$DataEvento,$Anotacoes){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into eventos(idEvento, idTrabalhoSolicitado, DataEvento,Anotacoes) VALUES (?,?,?,?)");
		$gravar->execute(array($idEvento,$idTrabalhoSolicitado,$DataEvento,$Anotacoes));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from eventos where idEvento =?");
		$gravar->execute(array($id));

	}

	function editar($idEvento,$idTrabalhoSolicitado,$DataEvento,$Anotacoes){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE eventos SET idTrabalhoSolicitado=?,DataEvento=?,Anotacoes=? WHERE idEvento=?");
		$gravar->execute(array($idTrabalhoSolicitado,$DataEvento,$Anotacoes,$idEvento));

	}
	function getId(){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$consulta = $pdo->prepare("select * from eventos");
		$consulta->execute(array());
		$table = $consulta->fetchAll(PDO::FETCH_OBJ);
		$array = array();
		foreach ($table as $key => $value) {
			array_push($array, $value->idEvento);
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



}

?>

