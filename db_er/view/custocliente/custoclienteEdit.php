<?php 
require_once '../../model/modelCustoCliente.php';
$Model = new ModelCustoCliente();
require_once '../../controller/controllerCustoCliente.php';
$Controller = new ControllerCustoCliente();
?>
<link rel="stylesheet" type="text/css" href="../../style.css">


<?php
$valores = $Model->SearchTableId($_GET['editId']);
?>

<div class="table_alter">
<div class="sized_box"></div>

<form action="../../index.php?view=custocliente" method="POST">
<table>
	<td class="nomes_alter">idCustoClieente  </td><td class="nomes_alter"><input class="values_alter" type="text" name="editidCustoCliente" value="<?php echo $valores[0]->idCustoCliente ?>"  readonly></td><tr>
	<td class="nomes_alter">ValorHH          </td><td class="nomes_alter"><input class="values_alter" type="float" name="editValorHH" value="<?php echo $valores[0]->ValorHH ?>"></td><tr>
	<td class="nomes_alter">idEmpresa        </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidEmpresa" name="editidEmpresa" onchange="confirmar_idEmpresa()" value="<?php echo $valores[0]->idEmpresa ?>"></td><tr>
	<td class="nomes_alter">idProduto        </td><td class="nomes_alter"><input class="values_alter" type="number" id="editidProduto" name="editidProduto" onchange="confirmar_idProduto()" value="<?php echo $valores[0]->idProduto ?>"></td><tr>
	<td class="nomes_alter">DtLimite         </td><td class="nomes_alter"><input class="values_alter" type="date" name="editDtLimite" value="<?php echo $valores[0]->DtLimite ?>"></td><tr>
</table>	
<div>
<input class="button_alter" type="submit" value="salvar">
</div>
</form>


<script>

function confirmar_idEmpresa()
{
var id = document.getElementById("editidEmpresa").value; 
var verificacao=true;
<?php foreach ($Controller->getIdEmpresa() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+"-"+php);
	if  (id === php)
	{
		verificacao = false;
	}


<?php endforeach ?>
if (verificacao) {
	alert(id+" nao existe");
	window.location.href='';
}
}

function confirmar_idProduto()
{
var id = document.getElementById("editidProduto").value; 
var verificacao=true;
<?php foreach ($Controller->getIdProduto() as $key => $value): ?>
var php = "<?php echo $value ?>"; 
//alert(id+"-"+php);
	if  (id === php)
	{
		verificacao = false;
	}


<?php endforeach ?>
if (verificacao) {
	alert(id+" nao existe");
	window.location.href='';
}
}


</script>