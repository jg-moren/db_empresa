
<?php  
class ControllerTrabalhoSolicitado 	{
	function adicionar($idTrabalhoSolicitado,$idPessoa,$CodTrabalho,$Titulo,$Descricao,$DtInicioAnalise,$DtEntregaET,$DtAceiteET,$DtAceiteProposta,$DtInicioProgr,$DtEntregaProgt,$DtAceitacaoTrabalho,$Custo,$ValorAcordado,$DtPgto){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("insert into trabalhosolicitado(idTrabalhoSolicitado, idPessoa, CodTrabalho,Titulo,Descricao,DtInicioAnalise, DtEntregaET, DtAceitacaoTrabalho,DtAceiteProposta,DtInicioProgr,DtEntregaProgt, DtAceiteET,Custo,ValorAcordado,DtPgto) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$gravar->execute(array($idTrabalhoSolicitado,$idPessoa,$CodTrabalho,$Titulo,$Descricao,$DtInicioAnalise,$DtEntregaET,$DtAceiteET,$DtAceiteProposta,$DtInicioProgr,$DtEntregaProgt,$DtAceitacaoTrabalho,$Custo,$ValorAcordado,$DtPgto));

	}

	function deletar($id){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("delete from trabalhosolicitado where idTrabalhoSolicitado =?");
		$gravar->execute(array($id));

	}

	function editar($idTrabalhoSolicitado,$idPessoa,$CodTrabalho,$Titulo,$Descricao,$DtInicioAnalise,$DtEntregaET,$DtAceiteET,$DtAceiteProposta,$DtInicioProgr,$DtEntregaProgt,$DtAceitacaoTrabalho,$Custo,$ValorAcordado,$DtPgto){
		$pdo = new pdo("mysql:host=localhost;dbname=db_er","root","");
		$gravar = $pdo->prepare("UPDATE trabalhosolicitado SET idPessoa=?,CodTrabalho=?,Titulo=?,Descricao=?,DtInicioAnalise=?,DtEntregaET=?,DtAceiteET=?,DtAceiteProposta=?,DtInicioProgr=?,DtEntregaProgt=?,DtAceitacaoTrabalho=?,Custo=?,ValorAcordado=?,DtPgto=?WHERE idTrabalhoSolicitado=?");
		$gravar->execute(array($idPessoa,$CodTrabalho,$Titulo,$Descricao,$DtInicioAnalise,$DtEntregaET,$DtAceiteET,$DtAceiteProposta,$DtInicioProgr,$DtEntregaProgt,$DtAceitacaoTrabalho,$Custo,$ValorAcordado,$DtPgto,$idTrabalhoSolicitado));

	}
	function getId(){
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

